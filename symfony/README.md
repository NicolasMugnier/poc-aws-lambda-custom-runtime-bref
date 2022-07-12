# Sample Symfony application

## Init Github codespace

* install serverless `npm i -g serverless`
* configure aws access keys : `serverless config credentials --provider aws --key <key> --secret <secret>`
* install symfony cli : 
    ```
    curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | sudo -E bash
    sudo apt install symfony-cli
    ```
* create symfony project : `symfony new sf_lambda_webapp --version="6.0.*" --webapp` 
* install bref : `cd sf_lambda_webapp && composer require bref/bref bref/symfony-bridge`
* install composer : `composer install --prefer-dist --optimize-autoloader --no-dev`
* warmup cache : `php bin/console cache:warmup --env=prod`
