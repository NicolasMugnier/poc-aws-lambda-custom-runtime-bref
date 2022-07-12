# Poc AWS Lambda custom runtime with Bref

## :bulb: Prerequisites

- [Node.js](https://nodejs.org/en/) can be installed using [nvm](https://github.com/nvm-sh/nvm)
- [Serverless](https://www.serverless.com/) installed locally : `npm i -g serverless`
- an AWS account : [AWS Console](https://aws.amazon.com/)
- [Create an aws access key](https://aws.amazon.com/premiumsupport/knowledge-center/create-access-key/)
- Configure your aws credentials locally :
  - using aws cli : https://docs.aws.amazon.com/cli/latest/userguide/cli-configure-files.html
  - using serverless : `serverless config credentials --provider aws --key <key> --secret <secret>`

## POCs

- [Symfony](./symfony/README.md)
- [Laravel](./Laravel/README.md)
- [event-driven CRUD](./event-driven-crud/README.md)

## Resources

- [Bref](https://bref.sh/)
- [Serverless](https://www.serverless.com/)
- [AWS Lambda Developer Guide](https://docs.aws.amazon.com/lambda/latest/dg/welcome.html)
- [Symfony](https://symfony.com/doc/current/setup.html)
- [Laravel](https://laravel.com/docs/9.x/installation)