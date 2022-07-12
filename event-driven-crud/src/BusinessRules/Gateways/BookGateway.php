<?php

declare(strict_types=1);

namespace App\BusinessRules\Gateways;

use App\BusinessRules\Entities\Book;

interface BookGateway
{
    function add(Book $book): Book;

    function findById(string $id): Book;
    
    function remove(string $id): void;
}
