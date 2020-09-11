<?php

namespace Jane\OpenApi3\Tests\Client\PetStore;

class Client extends \Jane\OpenApi3\Tests\Client\PetStore\Runtime\Client\Client
{
    /**
     * @param array $queryParameters {
     *
     *     @var int $limit How many items to return at one time (max 100)
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Jane\OpenApi3\Tests\Client\PetStore\Model\Pet[]|\Jane\OpenApi3\Tests\Client\PetStore\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listPets(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\OpenApi3\Tests\Client\PetStore\Endpoint\ListPets($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Jane\OpenApi3\Tests\Client\PetStore\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createPets(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\OpenApi3\Tests\Client\PetStore\Endpoint\CreatePets(), $fetch);
    }

    /**
     * @param string $petId The id of the pet to retrieve
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Jane\OpenApi3\Tests\Client\PetStore\Model\Pet|\Jane\OpenApi3\Tests\Client\PetStore\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function showPetById(string $petId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\OpenApi3\Tests\Client\PetStore\Endpoint\ShowPetById($petId), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('http://127.0.0.1:4010/');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (\count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer([new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\OpenApi3\Tests\Client\PetStore\Normalizer\JaneObjectNormalizer()], [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
