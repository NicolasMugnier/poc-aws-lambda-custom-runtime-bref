<?php

declare(struct_types=1);

namespace App\BusinessRules\UseCases\AddBook\Request;

use App\BusinessRules\UseCases\UseCaseRequest;

class AddBookRequest implements UseCaseRequest {

    private string $title;

    private string $author;

    public function __construct(string $title, string $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public static function create(string $title, string $author): self {
        return new self($title, $author);
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

}
