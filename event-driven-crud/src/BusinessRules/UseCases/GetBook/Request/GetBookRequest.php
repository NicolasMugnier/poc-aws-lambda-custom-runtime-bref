<?php

declare(strict_types=1);

namespace App\BusinessRules\UseCases\GetBook\Request;

use App\BusinessRules\UseCases\UseCaseRequest;

class GetBookRequest implements UseCaseRequest {

    private string $id;

    public function __construct(string $id) {
        $this->id = $id;
    }

    public static function create(string $id): self {
        return new self($id);
    }

    public function getId(): string {
        return $this->id;
    }

}
