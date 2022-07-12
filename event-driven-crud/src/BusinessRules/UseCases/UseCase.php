<?php

declare(strict_types=1);

namespace App\BusinessRules\UseCases;

use App\BusinessRules\UseCases\{
    UseCaseRequest,
    UseCaseResponse
};

interface UseCase {

    function execute(UseCaseRequest $request): UseCaseResponse;

}
