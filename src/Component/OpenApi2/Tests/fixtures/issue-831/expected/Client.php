<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Issue831;

class Client extends \Jane\Component\OpenApi2\Tests\Expected\Issue831\Runtime\Client\Client
{
    /**
     *
     * @return null
     */
    public function list()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Issue831\Endpoint\_List());
    }
    /**
     * @param string $orderId
     *
     * @return null
     */
    public function clone(string $orderId)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Issue831\Endpoint\_Clone($orderId));
    }
    /**
     *
     * @return null
     */
    public function print()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Issue831\Endpoint\_Print());
    }
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('http://localhost/');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi2\Tests\Expected\Issue831\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi2\Tests\Expected\Issue831\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}