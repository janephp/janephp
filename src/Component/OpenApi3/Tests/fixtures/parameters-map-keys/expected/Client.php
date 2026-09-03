<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ParametersMapKeys;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\ParametersMapKeys\Runtime\Client\Client
{
    /**
     * Retrieve an Order
     * @param int $orderId Order or cart ID
     * @param array{
     *    "shared_limit"?: int, //Rate limit shared across operations
     *    "site": string, //Order or cart ID
     *    "explicit_name"?: string, //Explicit name takes precedence over the key
     * } $queryParameters
     *
     * @return null
     */
    public function getOrder(int $orderId, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ParametersMapKeys\Endpoint\GetOrder($orderId, $queryParameters));
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\ParametersMapKeys\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\ParametersMapKeys\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}