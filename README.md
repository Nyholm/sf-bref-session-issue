# Symfony + Runtime + Bref session issue

This is a small app that shows a problem with session using runtime and Bref.

## How to reproduce

1. Clone and `composer install`
2. `yarn install` to get serverless
3. `serverless deploy`
4. Go the the URL in the output
5. Login, go to /admin/one and /admin/two
6. Check CloudWatch for the logs
