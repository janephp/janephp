<?php

namespace Jane\OpenApi2\Tests\Expected\SkipParameterCheck;

class Client extends \Jane\OpenApi2\Tests\Expected\SkipParameterCheck\Runtime\Client\Client
{
    /**
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
     *
     * @return null
     */
    public function testGetWithPathParameters(string $testPath, array $testBody, array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Jane\OpenApi2\Tests\Expected\SkipParameterCheck\Endpoint\TestGetWithPathParameters($testPath, $testBody, $queryParameters, $headerParameters));
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\OpenApi2\Tests\Expected\SkipParameterCheck\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\OpenApi2\Tests\Expected\SkipParameterCheck\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}