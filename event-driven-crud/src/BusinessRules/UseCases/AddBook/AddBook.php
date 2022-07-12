<?php

declare(strict_types=1);

namespace App\BusinessRules\UseCases\AddBook;

use App\BusinessRules\UseCases\{
    UseCase,
    UseCaseRequest,
    UseCaseResponse
};
use App\BusinessRules\Gateways\BookGateway;
use App\BusinessRules\UseCases\AddBook\{
    Request\AddBookRequest,
    Response\AddBookResponse
};
use App\BusinessRules\Entities\Book;

class AddBook implements UseCase {

    private BookGateway $bookGateway;

    public function __construct(BookGateway $bookGateway) {
        $this->bookGateway = $bookGateway;
    }

    /**
     * @param AddBookRequest $request
     * @return AddBookResponse
     */
    public function execute(UseCaseRequest $request): UseCaseResponse {

        $book = $this->bookGateway->add(new Book($request->getTitle(), $request->getAuthor()));

        return AddBookResponse::create($book);
    } 

}
