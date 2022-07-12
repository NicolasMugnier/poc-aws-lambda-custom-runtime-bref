<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../vendor/autoload.php';

// boostrap container
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use App\BusinessRules\UseCases\AddBook\{
    Request\AddBookRequest,
    Response\AddBookResponse
};

$container = new ContainerBuilder();
(new YamlFileLoader($container, new FileLocator(__DIR__ . '/../../config/')))->load('services.yml');
$container->compile();

return function ($event) use ($container) {
    /** @var AddBookResponse $response */
    $response = $container->get(App\BusinessRules\UseCases\AddBook\AddBook::class)->execute(AddBookRequest::create($event['title'], $event['author']));
    http_response_code(201);
    return json_encode(['id' => $response->getBook()->getId()]);
};
