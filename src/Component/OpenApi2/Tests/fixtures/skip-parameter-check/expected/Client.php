<?php

namespace Jane\OpenApi2\Tests\Expected;

class Client extends \Jane\OpenApi2\Tests\Expected\Runtime\Client\Client
{
    /**
     * 
     *
     * @param string $testPath 
     * @param array $testBody 
     * @param array $queryParameters {
     *     @var string $testQuery 
     *     @var string $testQuerySkipped 
     * }
     * @param array $headerParameters {
     *     @var string $testHeader 
     *     @var string $testHeaderSkipped 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function testGetWithPathParameters(string $testPath, array $testBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\OpenApi2\Tests\Expected\Endpoint\TestGetWithPathParameters($testPath, $testBody, $queryParameters, $headerParameters), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\OpenApi2\Tests\Expected\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}