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
     *
     * @return null
     */
    public function testGetWithPathParameters(array $testBody, array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestGetWithPathParameters($testBody, $queryParameters, $headerParameters));
    }
    /**
     * @param array $testBody
     * @param array $queryParameters {
     *     @var string $testQuery
     * }
     * @param array $headerParameters {
     *     @var string $testHeader
     * }
     *
     * @return null
     */
    public function testPostWithPathParameters(array $testBody, array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestPostWithPathParameters($testBody, $queryParameters, $headerParameters));
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
     *
     * @return null
     */
    public function testQueryParameters(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestQueryParameters($queryParameters));
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
     *
     * @return null
     */
    public function testHeaderParameters(array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestHeaderParameters($headerParameters));
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
     *
     * @return null
     */
    public function testFormParameters(array $formParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestFormParameters($formParameters));
    }
    /**
     * @param array $formParameters {
     *     @var string|resource $testFile
     * }
     *
     * @return null
     */
    public function testFormFileParameters(array $formParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestFormFileParameters($formParameters));
    }
    /**
     * @param string|resource $testBinary
     *
     * @return null
     */
    public function testBinaryBody($testBinary)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestBinaryBody($testBinary));
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
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\TestPathParameters($testString, $testInteger, $testFloat));
    }
    /**
     * @param int $testInteger
     *
     * @return null
     */
    public function getByTestInteger(int $testInteger)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Endpoint\GetByTestInteger($testInteger));
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi2\Tests\Expected\Parameters\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}