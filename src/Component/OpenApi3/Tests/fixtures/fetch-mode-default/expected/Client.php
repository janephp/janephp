<?php

namespace Jane\Component\OpenApi3\Tests\FetchModeDefault;

class Client extends \Jane\Component\OpenApi3\Tests\FetchModeDefault\Runtime\Client\Client
{
    /**
     *
     * @return null|\Jane\Component\OpenApi3\Tests\FetchModeDefault\Model\PetsGetResponse200
     */
    public function getPets()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\FetchModeDefault\Endpoint\GetPets());
    }
    /**
     * @param \Jane\Component\OpenApi3\Tests\FetchModeDefault\Model\PetsPostBody $requestBody
     *
     * @return null
     */
    public function createPet(\Jane\Component\OpenApi3\Tests\FetchModeDefault\Model\PetsPostBody $requestBody)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\FetchModeDefault\Endpoint\CreatePet($requestBody));
    }
    /**
     * @param string $petId
     *
     * @return null|\Jane\Component\OpenApi3\Tests\FetchModeDefault\Model\PetsPetIdGetResponse200
     */
    public function getPet(string $petId)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\FetchModeDefault\Endpoint\GetPet($petId));
    }
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        $plugins = [];
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\FetchModeDefault\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\FetchModeDefault\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}