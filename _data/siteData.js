const platformRatings = {
  Google: { total: 1005, average: 5 },
  TripAdvisor: { total: 513, average: 5 },
  Yelp: { total: 164, average: 4.8 },
  Facebook: { total: 145, average: 4.9 },
  Groupon: { total: 1035, average: 4.9 },
};

const calculateReviewSummary = (ratings) => {
  const entries = Object.values(ratings);
  const totalReviews = entries.reduce((sum, { total }) => sum + total, 0);
  const sumOfRatings = entries.reduce((sum, { average }) => sum + average, 0);
  const averageRating =
    entries.length === 0 ? 0 : Number((sumOfRatings / entries.length).toFixed(2));

  return {
    totalReviews,
    averageRating,
  };
};

const teamBios = [
  {
    name: "Stacy Lieser",
    role: "Safety Diver, Captain",
    instagram: "@Stacylieser",
    instagramUrl: "https://www.instagram.com/stacylieser/?hl=en",
    image: "/images/bio-pic-sq-stacy.jpeg",
    alt: "Photo of Hawaii Adventure Diving boat captain, Stacy Lieser snorkeling next to a large tiger shark.",
    description:
      "A USCG licensed captain, Divemaster, and graduate of the University of Hawaii, Stacy has earned a reputation as a highly capable boat captain and tour leader passionate about marine conservation.",
  },
  {
    name: "Nick Loewenstine",
    role: "Safety Diver",
    instagram: "@Lifeofasharkdiver",
    instagramUrl: "https://www.instagram.com/lifeofasharkdiver/?hl=en",
    image: "/images/bio-pic-sq-nick.jpeg",
    alt: "Photo of Hawaii Adventure Diving safety diver Nick Lowenstine pressing his hand over the nose of a large tiger shark.",
    description:
      "A lifelong adventurer with a passion for large predators, Nick is a certified Dive Master, emergency first response instructor, and world-class shark handler.",
  },
  {
    name: "Annika Zerne Young",
    role: "Safety Diver",
    instagram: "@nani.moana",
    instagramUrl: "https://www.instagram.com/nani.moana/?hl=en",
    image: "/images/bio-pic-sq-annika.jpeg",
    alt: "Photo of Hawaii Adventure Diving safety diver Annika Zerne Young petting the nose of a tiger shark while holding a GoPro.",
    description:
      "A graduate of the University of Hawai'i, Annika is a passionate marine conservationist and certified PADI Divemaster. She has been working with sharks on the North Shore of O'ahu since 2016.",
  },
  {
    name: "Sammy Falgiani",
    role: "Safety Diver, Photographer",
    instagram: "@Snappysammyphotos",
    instagramUrl: "https://www.instagram.com/snappysammyphotos/?hl=en",
    image: "/images/bio-pic-sq-sammy.jpeg",
    alt: "Photo of Hawaii Adventure Diving safety diver and photographer Sammy taking a picture of a shark with a professional underwater camera system.",
    description:
      "Certified PADI Divemaster and FII Freediver, Sammy discovered her passion for shark diving through photography and serves as the primary tour shooter.",
  },
  {
    name: "Sava Mankovskiy",
    role: "Captain & Safety Diver",
    instagram: "@Sava.Bien.Hawaii",
    instagramUrl: "https://www.instagram.com/sava.bien.hawaii/?hl=en",
    image: "/images/bio-pic-sq-sava.webp",
    alt: "Photo of Hawaii Adventure Diving captain and safety diver Sava under water swimming upright directly in front of a great white shark.",
    description:
      "A freediver, scuba divemaster/instructor, boat captain, and sailor, Sava loves the depth, wildlife, and the art of being like water.",
  },
  {
    name: "Danny Mako",
    role: "Photographer & Safety Diver",
    instagram: "@Danny_mako",
    instagramUrl: "https://www.instagram.com/danny_mako/?hl=en",
    image: "/images/bio-pic-sq-danny.webp",
    alt: "Photo of Hawaii Adventure Diving photographer and safety diver Danny Mako snorkeling underwater with a swirling swarm of menacing looking sharks.",
    description:
      "Photographer and marine scientist with a Bachelor of Science from the University of Tampa, as well as a PADI Divemaster, surfer, swimmer, and all-around waterman.",
  },
  {
    name: "Ro O'Rourke",
    role: "Captain",
    instagram: "@Rowouldgo",
    instagramUrl: "https://www.instagram.com/rowouldgo/?hl=en",
    image: "/images/bio-pic-sq-ro.webp",
    alt: "Headshot of Hawaii Adventure Diving captain Ro O'Rourke looking toward the camera on the Hawaii Adventure Diving boat.",
    description:
      "A certified first responder and fearless captain, Ro is a skilled freediver and photographer who captures unforgettable moments for every guest.",
  },
];

module.exports = {
  contact: {
    phonePretty: "+1 (808) 829-2203",
    phoneLink: "+18088292203",
    contactEmail: "nickloewenstine@gmail.com",
  },
  platformRatings,
  reviewSummary: calculateReviewSummary(platformRatings),
  teamBios,
};
