<?php

declare(strict_types=1);

namespace App\Repositories;

use App\BusinessRules\Gateways\BookGateway;
use App\BusinessRules\Entities\Book;
use Aws\DynamoDb\DynamoDbClient;

class BookRepository implements BookGateway {

    private DynamoDbClient $client;
    private const TABLE_NAME = 'book';

    public function __construct(DynamoDbClient $client) {
        $this->client = $client;
    }

    public function add(Book $book): Book {

        $id = uniqid();

        $result = $this->client->putItem([
            'TableName' => self::TABLE_NAME,
            'Item' => [
                'id' => [
                    'S' => $id
                ],
                'title' => [
                    'S' => $book->getTitle()
                ],
                'author' => [
                    'S' => $book->getAuthor()
                ]
            ]
        ]);

        return $this->findById($id);
    }

    public function findById(string $id): Book {

        /** @var \Aws\Result $result */
        $result = $this->client->getItem([
            'TableName' => self::TABLE_NAME,
            'Key' => [
                'id' => [
                    'S' => $id
                ]
            ]
        ]);

        if (isset($result['Item'])) {
            return (new Book($result['Item']['title']['S'], $result['Item']['author']['S']))->setId($id);    
        }
        throw new \Exception('Item not found');
    }

    public function remove(string $id): void {
        $this->client->deleteItem([
            'TableName' => self::TABLE_NAME,
            'Key' => [
                'id' => [
                    'S' => $id
                ] 
            ]
        ]);
        return;
    }

}
