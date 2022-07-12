<?php

declare(strict_types=1);

namespace App\BusinessRules\UseCases\AddBook\Response;

use App\BusinessRules\Entities\Book;
use App\BusinessRules\UseCases\UseCaseResponse;

class AddBookResponse implements UseCaseResponse {

    private Book $book;

    public function __construct(Book $book) {
        $this->book = $book;
    }

    public static function create(Book $book): self {
        return new self($book);
    }

    public function getBook(): Book {
        return $this->book;
    }

}
