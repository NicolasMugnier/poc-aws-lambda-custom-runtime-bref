<?php

declare(strict_types=1);

namespace App\BusinessRules\Entities;

class Book {

    private string $title;

    private string $author;

    private ?string $id = null;

    public function __construct(string $title, string $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function setId(string $id): self {
        $this->id = $id;

        return $this;
    }

    public function getId(): ?string {
        return $this->id;
    }

}
