<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue787;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\Issue787\Runtime\Client\Client
{
    /**
     * @param array{
     *    "testBoolean"?: bool,
     * } $queryParameters
     *
     * @return null
     */
    public function getFoo(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Issue787\Endpoint\GetFoo($queryParameters));
    }
    /**
     * @param mixed $requestBody
     *
     * @return null
     */
    public function postFoo($requestBody)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Issue787\Endpoint\PostFoo($requestBody));
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\Issue787\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\Issue787\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}