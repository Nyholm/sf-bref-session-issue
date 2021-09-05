# Symfony + Runtime + Bref session issue

This is a small app that shows a problem with session using runtime and Bref.

## How to reproduce

1. Clone and `composer install`
2. `yarn install` to get serverless
3. `serverless deploy`
4. Go the the URL in the output
5. Try to Login
6. Check CloudWatch for the logs

You will see that you are successfully authenticated but the very next request
fails and you are directed back to the login page.
