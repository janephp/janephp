<?php

namespace Jane\Component\OpenApi3\Tests\Expected\FromUrl;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Runtime\Client\Client
{
    /**
     * @param array{
     *    "limit"?: int, //How many items to return at one time (max 100)
     * } $queryParameters
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Pet[]|\Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Error
     */
    public function listPets(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Endpoint\ListPets($queryParameters));
    }
    /**
     * @param \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Pet $requestBody
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Error
     */
    public function createPets(\Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Pet $requestBody)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Endpoint\CreatePets($requestBody));
    }
    /**
     * @param string $petId The id of the pet to retrieve
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Pet|\Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Error
     */
    public function showPetById(string $petId)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Endpoint\ShowPetById($petId));
    }
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('http://petstore.swagger.io/v1');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}