<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Parameters;

class Client extends \Jane\Component\OpenApi2\Tests\Expected\Parameters\Runtime\Client\Client
{
    /**
     * @param array $testBody
     * @param array $queryParameters {
     *     @var string $testQuery
     * }
     * @param array $headerParameters {
     *     @var string $testHeader
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testGetWithPathParameters(array $testBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestGetWithPathParameters($testBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param array $testBody
     * @param array $queryParameters {
     *     @var string $testQuery
     * }
     * @param array $headerParameters {
     *     @var string $testHeader
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testPostWithPathParameters(array $testBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestPostWithPathParameters($testBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $testString
     *     @var int $testInteger
     *     @var int $testFloat
     *     @var array $testArray
     *     @var string $testRequired
     *     @var string $testDefault
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testQueryParameters(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestQueryParameters($queryParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $testString
     *     @var int $testInteger
     *     @var int $testFloat
     *     @var array $testArray
     *     @var string $testRequired
     *     @var string $testDefault
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testHeaderParameters(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestHeaderParameters($headerParameters), $fetch);
    }
    /**
     * @param array $formParameters {
     *     @var string $testString
     *     @var int $testInteger
     *     @var int $testFloat
     *     @var array $testArray
     *     @var string $testRequired
     *     @var string $testDefault
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testFormParameters(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestFormParameters($formParameters), $fetch);
    }
    /**
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $testFile
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testFormFileParameters(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestFormFileParameters($formParameters), $fetch);
    }
    /**
     * @param string|resource|\Psr\Http\Message\StreamInterface $testBinary
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testBinaryBody($testBinary, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestBinaryBody($testBinary), $fetch);
    }
    /**
     * @param string $testString
     * @param int $testInteger
     * @param int $testFloat
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testPathParameters(string $testString, int $testInteger, int $testFloat, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestPathParameters($testString, $testInteger, $testFloat), $fetch);
    }
    /**
     * @param int $testInteger
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getByTestInteger(int $testInteger, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\GetByTestInteger($testInteger), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}