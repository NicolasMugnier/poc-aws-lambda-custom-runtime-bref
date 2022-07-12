<?php

declare(strict_types=1);

namespace App\Repositories;

use App\BusinessRules\Gateways\BookGateway;
use App\BusinessRules\Entities\Book;

class BookRepository implements BookGateway {

    public function add(Book $book): Book {
        $book->setId(uniqid());
        return $book;
    }

    public function findById(string $id): Book {
        return (new Book('test title', 'test author'))->setId(uniqid());
    }

    public function remove(string $id): void {
        return;
    }

}
