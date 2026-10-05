# HAD Google Ads MCP

## Purpose
What this integration does.

## Architecture
Claude Code
→ Google Ads MCP
→ ADC
→ Google Ads API
→ HAD Google Ads account

## Installed versions
Python 3.13.15
pipx 1.16.7
google-ads-mcp 0.0.3
gcloud SDK 586.0.0

## Important paths
MCP executable:
/Users/mike/.local/bin/google-ads-mcp

ADC:
/Users/mike/.config/gcloud/application_default_credentials.json

Claude Code MCP configuration:
[where Claude actually stored it]

OAuth source credential:
[private path, but no secrets]

## Google Cloud
Project ID:
first-site-509810-v5

## Authentication setup
What we did to create ADC.

## Claude Code configuration
Command, environment variables, transport, etc.

## Testing
How to verify:
- MCP loads
- Google authentication works
- HAD customer is visible

## Updating
How to intentionally update Python/pipx/MCP without blindly using latest.

## Troubleshooting
Common failures and fixes.

## Security notes
Never commit OAuth JSON, ADC, refresh tokens, developer tokens, etc.