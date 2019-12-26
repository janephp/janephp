<?php

namespace Jane\OpenApi\Tests\Expected;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit How many items to return at one time (max 100)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\Pet[]|\Jane\OpenApi\Tests\Expected\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function listPets(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\ListPets($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createPets(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\CreatePets(), $fetch);
    }
    /**
     * 
     *
     * @param string $petId The id of the pet to retrieve
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\Pet|\Jane\OpenApi\Tests\Expected\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function showPetById(string $petId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\ShowPetById($petId), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri('http://petstore.swagger.io/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\OpenApi\Tests\Expected\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}