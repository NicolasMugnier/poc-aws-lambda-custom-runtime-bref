<?php

declare(strict_types=1);

namespace App\Factories;

use Aws\DynamoDb\DynamoDbClient;

class DynamoDbClientFactory {

    public static function create(string $region, string $version = '2012-08-10'): DynamoDbClient {
        return new DynamoDbClient([
            'version' => $version,
            'region' => $region
        ]);
    }

}
