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
     *
     * @return null
     */
    public function testGetWithPathParameters(string $testPath, array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestGetWithPathParameters($testPath, $queryParameters, $headerParameters));
    }
    /**
     * @param string $testPath
     * @param array{
     *    "testQuery"?: string,
     * } $queryParameters
     * @param array{
     *    "testHeader"?: string,
     * } $headerParameters
     *
     * @return null
     */
    public function testPostWithPathParameters(string $testPath, array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestPostWithPathParameters($testPath, $queryParameters, $headerParameters));
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
     *
     * @return null
     */
    public function testQueryParameters(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestQueryParameters($queryParameters));
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
     *
     * @return null
     */
    public function testHeaderParameters(array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestHeaderParameters($headerParameters));
    }
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Parameters\Model\TestFormPostBody $requestBody
     *
     * @return null
     */
    public function testFormParameters(?\Jane\Component\OpenApi3\Tests\Expected\Parameters\Model\TestFormPostBody $requestBody = null)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestFormParameters($requestBody));
    }
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Parameters\Model\TestFormFilePostBody $requestBody
     *
     * @return null
     */
    public function testFormFileParameters(?\Jane\Component\OpenApi3\Tests\Expected\Parameters\Model\TestFormFilePostBody $requestBody = null)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestFormFileParameters($requestBody));
    }
    /**
     * @param string|resource $requestBody
     *
     * @return null
     */
    public function testBinaryBody($requestBody)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestBinaryBody($requestBody));
    }
    /**
     * @param string $testString
     * @param int $testInteger
     * @param int $testFloat
     *
     * @return null
     */
    public function testPathParameters(string $testString, int $testInteger, int $testFloat)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestPathParameters($testString, $testInteger, $testFloat));
    }
    /**
     * @param int $testInteger
     *
     * @return null
     */
    public function getByTestInteger(int $testInteger)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\GetByTestInteger($testInteger));
    }
    /**
     * @param array{
     *    "input": array,
     * } $queryParameters
     *
     * @return null
     */
    public function testDictionary(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestDictionary($queryParameters));
    }
    /**
     * @param array{
     *    "filter"?: array,
     * } $queryParameters
     *
     * @return null
     */
    public function testObjectQuery(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestObjectQuery($queryParameters));
    }
    /**
     * @param array{
     *    "search": array,
     * } $queryParameters
     *
     * @return null
     */
    public function testObjectAdditionalProperties(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestObjectAdditionalProperties($queryParameters));
    }
    /**
     * @param array{
     *    "columns"?: array,
     *    "properties[]"?: array,
     * } $queryParameters
     *
     * @return null
     */
    public function testFormExplodeQuery(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint\TestFormExplodeQuery($queryParameters));
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}