document.addEventListener('DOMContentLoaded', () => {

  const MIN_DWELL_MS = 3000;       // minimum ms midpoint must stay in view to count as a view
  const MILESTONES_S = [10, 30, 60]; // cumulative dwell milestones in seconds

  // Find all <section> tags with an id — no hardcoded list needed
  const sections = document.querySelectorAll('section[id]');
  if (!sections.length) return;

  // Per-section tracking state
  const state = {};
  sections.forEach(section => {
    state[section.id] = {
      cumulativeMs:    0,         // total banked dwell time from completed visits
      visitCount:      0,         // number of qualifying views this session
      firedMilestones: new Set(), // which milestones have already fired
      qualifyingStart: null,      // timestamp when section entered view (current attempt)
      qualifyingTimer: null,      // setTimeout handle for the 3s qualification
      visitStart:      null,      // timestamp when current qualified visit began (= qualifyingStart)
      milestoneTimer:  null       // setTimeout handle for the next pending milestone
    };
  });

  // Push an event to GTM dataLayer
  function push(eventName, params) {
    window.dataLayer = window.dataLayer || [];
    const payload = Object.assign({ event: eventName }, params);
    window.dataLayer.push(payload);
    console.log('[section-engagement]', payload);
  }

  // Current total dwell including any in-progress visit
  function getTotalDwellMs(s) {
    return s.visitStart !== null
      ? s.cumulativeMs + (Date.now() - s.visitStart)
      : s.cumulativeMs;
  }

  // Schedule a setTimeout that fires when cumulative dwell crosses the next unfired milestone
  function scheduleNextMilestone(sectionId) {
    const s = state[sectionId];
    const next = MILESTONES_S.find(m => !s.firedMilestones.has(m));
    if (!next) return;

    const remainingMs = (next * 1000) - getTotalDwellMs(s);

    if (remainingMs <= 0) {
      // Already past this milestone from banked time — fire immediately then schedule the next
      s.firedMilestones.add(next);
      push('section_engaged', {
        section_id:           sectionId,
        dwell_milestone:      next,
        section_visit_count:  s.visitCount
      });
      scheduleNextMilestone(sectionId);
      return;
    }

    s.milestoneTimer = setTimeout(() => {
      s.milestoneTimer = null;
      s.firedMilestones.add(next);
      push('section_engaged', {
        section_id:           sectionId,
        dwell_milestone:      next,
        section_visit_count:  s.visitCount
      });
      scheduleNextMilestone(sectionId);
    }, remainingMs);
  }

  // rootMargin '-50% 0px -50% 0px' shrinks the effective viewport to a zero-height
  // line at its vertical center. isIntersecting becomes true when the section
  // straddles that center line — i.e. the viewport center is inside the section.
  // This fires correctly when section height changes (e.g. accordion open/close)
  // because bounding rects are evaluated fresh on each intersection change.
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      const sectionId = entry.target.id;
      const s = state[sectionId];

      if (entry.isIntersecting) {
        // Section midpoint entered viewport — start the qualification timer
        s.qualifyingStart = Date.now();
        s.qualifyingTimer = setTimeout(() => {
          s.qualifyingTimer = null;

          // 3s minimum met — record a qualifying view
          s.visitCount++;
          s.visitStart = s.qualifyingStart; // qualifying time counts toward dwell

          push('section_viewed', {
            section_id:          sectionId,
            section_visit_count: s.visitCount
          });

          scheduleNextMilestone(sectionId);
        }, MIN_DWELL_MS);

      } else {
        // Section midpoint left viewport

        // Cancel qualification attempt if still pending
        if (s.qualifyingTimer !== null) {
          clearTimeout(s.qualifyingTimer);
          s.qualifyingTimer = null;
          s.qualifyingStart = null;
        }

        // Bank elapsed dwell time and cancel pending milestone timer
        if (s.visitStart !== null) {
          if (s.milestoneTimer !== null) {
            clearTimeout(s.milestoneTimer);
            s.milestoneTimer = null;
          }
          s.cumulativeMs += Date.now() - s.visitStart;
          s.visitStart = null;
        }
      }
    });
  }, {
    rootMargin: '-50% 0px -50% 0px',
    threshold: 0
  });

  sections.forEach(section => observer.observe(section));

});
