<?php

declare(strict_types=1);

use Http\Discovery\Psr17FactoryDiscovery;
use Symfony\Component\Serializer\Normalizer\UidNormalizer;

require 'vendor/autoload.php';

$responseData = <<<'JSON'
{
  "id": 42,
  "uuid": "dd225c50-9cc4-444b-b412-d3a0cfffc2af"
}
JSON;


$httpClient = new \Http\Mock\Client();

$response = Psr17FactoryDiscovery::findResponseFactory()
    ->createResponse(200)
    ->withBody(Psr17FactoryDiscovery::findStreamFactory()->createStream($responseData))
    ->withHeader('Content-Type', 'application/json');
$httpClient->addResponse($response);

$client = \Tests\Petstore\Client::create($httpClient, [], [
    new UidNormalizer()
]);
$pet = $client->getSomething();
var_dump($pet);
