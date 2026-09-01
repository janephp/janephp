<?php

namespace Jane\Component\OpenApi31\Tests\Client;

class Client extends \Jane\Component\OpenApi31\Tests\Client\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Client\Exception\GetEndpointUnauthorizedException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Client\Model\SimpleResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function getEndpoint(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Client\Endpoint\GetEndpoint(), $fetch);
    }
    /**
     * @param \Jane\Component\OpenApi31\Tests\Client\Model\ThingInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Client\Exception\CreateThingBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Client\Model\Thing : \Psr\Http\Message\ResponseInterface)
     */
    public function createThing(\Jane\Component\OpenApi31\Tests\Client\Model\ThingInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Client\Endpoint\CreateThing($requestBody), $fetch);
    }
    /**
     * @param \Jane\Component\OpenApi31\Tests\Client\Model\ThingInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Client\Model\Thing : \Psr\Http\Message\ResponseInterface)
     */
    public function createFormThing(\Jane\Component\OpenApi31\Tests\Client\Model\ThingInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Client\Endpoint\CreateFormThing($requestBody), $fetch);
    }
    /**
     * @param string $thingId
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Client\Exception\DeleteThingNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteThing(string $thingId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Client\Endpoint\DeleteThing($thingId), $fetch);
    }
    /**
     * @param string $thingId
     * @param array{
     *    "q": string,
     *    "page"?: int,
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Client\Exception\GetThingNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Client\Model\Thing : \Psr\Http\Message\ResponseInterface)
     */
    public function getThing(string $thingId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Client\Endpoint\GetThing($thingId, $queryParameters), $fetch);
    }
    /**
     * @param string $thingId
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Client\Model\ThingDetails : \Psr\Http\Message\ResponseInterface)
     */
    public function getThingDetails(string $thingId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Client\Endpoint\GetThingDetails($thingId), $fetch);
    }
    public static function create(?\Psr\Http\Client\ClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
        }
        if ($applyServerPlugins) {
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('http://127.0.0.1:4012/');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\Client\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi31\Tests\Client\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}