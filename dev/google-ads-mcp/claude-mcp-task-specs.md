# HAD Google Ads MCP Task Guidelines

## Goal
Use MCP for targeted, auditable Google Ads data retrieval and analysis.
Do not ask Claude to "analyze the whole account" without defining scope.

## Every task spec should define

### 1. Account
- Hawaii Adventure Diving
- Explicit Google Ads customer ID

### 2. Date range
- Exact period
- Comparison period if relevant

### 3. Scope
Examples:
- campaign level only
- one specific campaign
- keywords for one campaign
- search terms for one ad group
- device breakdown
- impression share metrics

### 4. Fields to retrieve
List them explicitly.

Example:
- impressions
- clicks
- CTR
- cost
- conversions
- conversion value
- CPA
- ROAS
- search impression share
- search lost IS (budget)
- search lost IS (rank)

### 5. Exclusions
Tell Claude what NOT to retrieve.

Example:
- Do not pull ads
- Do not pull search terms
- Do not pull historical data beyond 30 days
- Do not make account changes

### 6. Transparency requirement
Claude must report:
- which resources/reports it queried
- which fields it retrieved
- any requested fields unavailable
- any filters applied
- whether results were aggregated
- anything it did not inspect

### 7. Output format
Prefer concise tables and observations.

### 8. Follow-up
Do not automatically expand scope.
Recommend the next useful report/query instead.