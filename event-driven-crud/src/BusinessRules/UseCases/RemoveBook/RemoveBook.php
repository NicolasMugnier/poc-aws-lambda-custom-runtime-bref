<?php

declare(strict_types=1);

namespace App\BusinessRules\UseCases\RemoveBook;

use App\BusinessRules\Gateways\BookGateway;
use App\BusinessRules\UseCases\{
    UseCase,
    UseCaseRequest,
    UseCaseResponse
};
use App\BusinessRules\UseCases\RemoveBook\{
    Request\RemoveBookRequest,
    Response\RemoveBookResponse
};


class RemoveBook implements UseCase {

    private BookGateway $bookGateway;

    public function __construct(BookGateway $bookGateway) {
        $this->bookGateway = $bookGateway;
    }

    /**
     * @param RemoveBookRequest $request
     * @return RemoveBookResponse
     */
    public function execute(UseCaseRequest $request): UseCaseResponse {
        $this->bookGateway->remove($request->getId());
        return new RemoveBookResponse();
    }

}
