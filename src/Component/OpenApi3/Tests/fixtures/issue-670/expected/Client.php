<?php

namespace Jane\Component\OpenApi3\Tests\Expected;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint1GetResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getEndpoint1(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetEndpoint1(), $fetch);
    }
    /**
     * 
     *
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint1PostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postEndpoint1(?\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint1PostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\PostEndpoint1($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint2GetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getEndpoint2(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetEndpoint2(), $fetch);
    }
    /**
     * 
     *
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint2PostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postEndpoint2(?\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint2PostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\PostEndpoint2($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint3GetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getEndpoint3(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetEndpoint3(), $fetch);
    }
    /**
     * 
     *
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint3PostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postEndpoint3(?\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint3PostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\PostEndpoint3($requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}