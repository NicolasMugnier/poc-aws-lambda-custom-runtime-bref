# Sample event-driven CRUD

## Installation

* install : `composer install`
* deploy : `serverless deploy`
* test : 
    * Add : `serverless invoke --function addBook -d '{"title": "title", "author": "author"}'`
    * Get : `serverless invoke --function getBook -d '{"id": "someId"}'`
    * Delete = `serverless invoke --function deleteBook -d '{"id": "anotherId"}'`