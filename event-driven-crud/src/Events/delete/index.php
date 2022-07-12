<?php

declare(strict_types=1);

// require_once __DIR__ . '/../../../vendor/autoload.php';
require_once '/tmp/vendor/autoload.php';

// boostrap container
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use App\BusinessRules\UseCases\RemoveBook\{
    Request\RemoveBookRequest,
    Response\RemoveBookResponse
};

$container = new ContainerBuilder();
(new YamlFileLoader($container, new FileLocator(__DIR__ . '/../../config/')))->load('services.yml');
$container->compile();

return function ($event) use ($container) {
    /** @var RemoveBookResponse $response */
    $response = $container->get(App\BusinessRules\UseCases\RemoveBook\RemoveBook::class)->execute(RemoveBookRequest::create($event['id']));
    http_response_code(204);
    return;
};
