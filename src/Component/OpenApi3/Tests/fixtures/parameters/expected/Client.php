<?php

namespace Jane\Component\OpenApi3\Tests\Expected;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Client
{
    /**
     * 
     *
     * @param string $testPath 
     * @param array $queryParameters {
     *     @var string $testQuery 
     * }
     * @param array $headerParameters {
     *     @var string $testHeader 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function testGetWithPathParameters(string $testPath, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\TestGetWithPathParameters($testPath, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $testPath 
     * @param array $queryParameters {
     *     @var string $testQuery 
     * }
     * @param array $headerParameters {
     *     @var string $testHeader 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function testPostWithPathParameters(string $testPath, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\TestPostWithPathParameters($testPath, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $testString 
     *     @var int $testInteger 
     *     @var float $testFloat 
     *     @var array $testArray 
     *     @var string $testRequired 
     *     @var string $testDefault 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function testQueryParameters(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\TestQueryParameters($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $headerParameters {
     *     @var string $testString 
     *     @var int $testInteger 
     *     @var float $testFloat 
     *     @var array $testArray 
     *     @var string $testRequired 
     *     @var string $testDefault 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function testHeaderParameters(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\TestHeaderParameters($headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Model\TestFormPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function testFormParameters(?\Jane\Component\OpenApi3\Tests\Expected\Model\TestFormPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\TestFormParameters($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Model\TestFormFilePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function testFormFileParameters(?\Jane\Component\OpenApi3\Tests\Expected\Model\TestFormFilePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\TestFormFileParameters($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string|resource|\Psr\Http\Message\StreamInterface $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function testBinaryBody($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\TestBinaryBody($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $testString 
     * @param int $testInteger 
     * @param float $testFloat 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function testPathParameters(string $testString, int $testInteger, float $testFloat, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\TestPathParameters($testString, $testInteger, $testFloat), $fetch);
    }
    /**
     * 
     *
     * @param int $testInteger 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getByTestInteger(int $testInteger, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetByTestInteger($testInteger), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $input 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function testDictionary(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\TestDictionary($queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}