<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Parameters;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\Client\Client
{
    /**
     * @param string $testPath
     * @param array{
     *    "testQuery"?: string,
     * } $queryParameters
     * @param array{
     *    "testHeader"?: string,
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testGetWithPathParameters(string $testPath, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestGetWithPathParameters($testPath, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $testPath
     * @param array{
     *    "testQuery"?: string,
     * } $queryParameters
     * @param array{
     *    "testHeader"?: string,
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testPostWithPathParameters(string $testPath, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestPostWithPathParameters($testPath, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param array{
     *    "testString"?: string,
     *    "testInteger"?: int,
     *    "testFloat"?: int,
     *    "testArray"?: array,
     *    "testRequired": string,
     *    "testDefault"?: string,
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testQueryParameters(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestQueryParameters($queryParameters), $fetch);
    }
    /**
     * @param array{
     *    "testString"?: string,
     *    "testInteger"?: int,
     *    "testFloat"?: int,
     *    "testArray"?: array,
     *    "testRequired": string,
     *    "testDefault"?: string,
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testHeaderParameters(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestHeaderParameters($headerParameters), $fetch);
    }
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Parameters\Model\TestFormPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testFormParameters(?\Jane\Component\OpenApi3\Tests\Expected\Parameters\Model\TestFormPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestFormParameters($requestBody), $fetch);
    }
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Parameters\Model\TestFormFilePostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testFormFileParameters(?\Jane\Component\OpenApi3\Tests\Expected\Parameters\Model\TestFormFilePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestFormFileParameters($requestBody), $fetch);
    }
    /**
     * @param string|resource|\Psr\Http\Message\StreamInterface $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testBinaryBody($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestBinaryBody($requestBody), $fetch);
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
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestPathParameters($testString, $testInteger, $testFloat), $fetch);
    }
    /**
     * @param int $testInteger
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getByTestInteger(int $testInteger, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\GetByTestInteger($testInteger), $fetch);
    }
    /**
     * @param array{
     *    "input": array,
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testDictionary(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestDictionary($queryParameters), $fetch);
    }
    /**
     * @param array{
     *    "filter"?: array,
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testObjectQuery(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestObjectQuery($queryParameters), $fetch);
    }
    /**
     * @param array{
     *    "search": array,
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testObjectAdditionalProperties(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestObjectAdditionalProperties($queryParameters), $fetch);
    }
    /**
     * @param array{
     *    "columns"?: array,
     *    "properties[]"?: array,
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function testFormExplodeQuery(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestFormExplodeQuery($queryParameters), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}