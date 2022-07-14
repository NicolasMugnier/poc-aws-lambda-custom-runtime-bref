<?php

declare(strict_types=1);

// require_once __DIR__ . '/../../../vendor/autoload.php';
require_once '/tmp/vendor/autoload.php';

// boostrap container
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use App\BusinessRules\UseCases\GetBook\{
    Request\GetBookRequest,
    Response\GetBookResponse
};

$container = new ContainerBuilder();
(new YamlFileLoader($container, new FileLocator(__DIR__ . '/../../config/')))->load('services.yml');
$container->compile();

return function ($event) use ($container) {
    /** @var GetBookResponse $response */
    $response = $container->get(App\BusinessRules\UseCases\GetBook\GetBook::class)->execute(GetBookRequest::create($event['id']));
    return json_encode([
        'id' => $response->getBook()->getId(),
        'title' => $response->getBook()->getTitle(),
        'author' => $response->getBook()->getAuthor()
    ]);
};
