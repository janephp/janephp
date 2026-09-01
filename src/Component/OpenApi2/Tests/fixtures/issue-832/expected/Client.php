<?php

namespace Jane\Component\OpenApi2\Tests\Issue832;

class Client extends \Jane\Component\OpenApi2\Tests\Issue832\Runtime\Client\Client
{
    /**
     *
     * @return null
     */
    public function ping()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Issue832\Endpoint\Ping());
    }
    /**
     *
     * @return null
     */
    public function prefixStatuscheck()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Issue832\Endpoint\PrefixStatuscheck());
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi2\Tests\Issue832\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi2\Tests\Issue832\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}