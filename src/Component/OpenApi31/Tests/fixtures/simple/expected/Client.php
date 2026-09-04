<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Simple;

class Client extends \Jane\Component\OpenApi31\Tests\Expected\Simple\Runtime\Client\Client
{
    /**
     * @param array{
     *    "limit"?: int,
     * } $queryParameters
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Simple\Model\Pet[]
     */
    public function listPets(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Simple\Endpoint\ListPets($queryParameters));
    }
    /**
     * @param \Jane\Component\OpenApi31\Tests\Expected\Simple\Model\Pet $requestBody
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Simple\Model\Pet
     */
    public function createPet(\Jane\Component\OpenApi31\Tests\Expected\Simple\Model\Pet $requestBody)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Simple\Endpoint\CreatePet($requestBody));
    }
    /**
     * @param string $petId
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Simple\Model\Pet
     */
    public function showPetById(string $petId)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Simple\Endpoint\ShowPetById($petId));
    }
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://api.example.com/v1');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\Expected\Simple\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi31\Tests\Expected\Simple\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}