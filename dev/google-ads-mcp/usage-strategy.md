# Google Ads MCP Usage Strategy

## What it is good for

Targeted data pulls when we already know what we want.

Examples:
- Pull a specific metric/date range
- Compare campaign performance
- Retrieve search impression share
- Pull keyword/search-term data
- Create a narrowly scoped report
- Get structured data that would otherwise require an export

## What it is NOT good for

Do not rely on it as an autonomous "analyze my whole account" system.

Reasons:
- We cannot easily see what it chose to inspect.
- It may overlook useful dimensions.
- It may retrieve too much or too little data.
- Interpretation happens after an opaque data-selection step.
- Tool calls can be slow and token-expensive.
- Simple Google Ads UI questions are often faster manually.

## Preferred HAD workflow

1. Inspect Google Ads manually.
2. Ask ChatGPT where useful diagnostic data might live.
3. Open specific reports/columns.
4. Share screenshots.
5. Interpret findings together.
6. Branch into other Google Ads reports where warranted.
7. Check GA4 / landing-page data where relevant.
8. Use MCP only when a targeted structured data pull saves work.

## Rule of thumb

If Google Ads can answer the question visually in under ~1 minute:
use Google Ads.

If the task requires:
- multiple reports
- repeated filtering
- structured extraction
- calculations
- comparison across periods/dimensions

then MCP may be worthwhile.

## Example investigation areas

Campaign:
- Search impression share
- Search lost IS (budget)
- Search lost IS (rank)
- Top impression share
- Absolute top impression share
- CPC
- CPA
- ROAS
- conversion rate

Then drill into:
- keywords
- search terms
- auction insights
- devices
- locations
- day/time
- landing pages
- GA4