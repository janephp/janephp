<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue803;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\Issue803\Runtime\Client\Client
{
    /**
     * Foo bar
     *
     * @param array{
     *    "mode"?: string, //File listing mode
     * } $queryParameters
     * @param array{
     *    "X-Sort-Order"?: string, //Sort order
     * } $headerParameters
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Issue803\Model\File[]
     */
    public function getFiles(array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Issue803\Endpoint\GetFiles($queryParameters, $headerParameters));
    }
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://example.com/rest/v1');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\Issue803\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\Issue803\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}