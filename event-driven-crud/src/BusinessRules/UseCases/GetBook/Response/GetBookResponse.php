<?php

declare(strict_types=1);

namespace App\BusinessRules\UseCases\GetBook\Response;

use App\BusinessRules\UseCases\UseCaseResponse;
use App\BusinessRules\Entities\Book;

class GetBookResponse implements UseCaseResponse {

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
