# Sample event-driven CRUD

## :floppy_disk: Installation

* `composer install` : it will install php dependencies
* `npm install` : it will install node dependencies used by serverless (dev)

## :rocket: Deploy    

`serverless deploy`

it will deploy the project on AWS and create the following resources in `eu-west-1` region : 

Lambda : 
* addBook
* getBook
* deleteBook

S3 :

DynamoDB : 
* table `book`

## :runner: Run

* test : 
    * Add : `serverless invoke --function addBook -d '{"title": "title", "author": "author"}'`
    * Get : `serverless invoke --function getBook -d '{"id": "someId"}'`
    * Delete : `serverless invoke --function deleteBook -d '{"id": "anotherId"}'`