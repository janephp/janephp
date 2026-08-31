<?php

namespace Jane\Component\OpenApi31\Tests\Expected;

class Client extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\MyApiEndpointGetResponse200Item[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listEntities(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\ListEntities(), $fetch);
    }
    /**
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\MyApiEndpointIdGetResponse200 : \Psr\Http\Message\ResponseInterface)
     */
    public function getEntity(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetEntity($id), $fetch);
    }
    public static function create(?\Psr\Http\Client\ClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\Expected\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}