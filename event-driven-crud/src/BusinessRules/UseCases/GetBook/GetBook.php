<?php

declare(strict_types=1);

namespace App\BusinessRules\UseCases\GetBook;

use App\BusinessRules\Gateways\BookGateway;
use App\BusinessRules\UseCases\{
    UseCase,
    UseCaseRequest,
    UseCaseResponse
};
use App\BusinessRules\UseCases\GetBook\{
    Request\GetBookRequest,
    Response\GetBookResponse
};
use App\BusinessRules\Entities\Book;

class GetBook implements UseCase {

    private BookGateway $bookGateway;

    public function __construct(BookGateway $bookGateway) {
        $this->bookGateway = $bookGateway;
    }

    /**
     * @param GetBookRequest $request
     * @return GetBookResponse 
     */
    public function execute(UseCaseRequest $request): UseCaseResponse {

        /** @var Book $book */
        $book = $this->bookGateway->findById($request->getId());
        
        return GetBookResponse::create($book);
    }

}
