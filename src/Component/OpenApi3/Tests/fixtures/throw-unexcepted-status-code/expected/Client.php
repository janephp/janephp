<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Runtime\Client\Client
{
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Model\FooPayload $requestBody
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Exception\BadResponseException
     *
     * @return null
     */
    public function postFoo(?\Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Model\FooPayload $requestBody = null)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Endpoint\PostFoo($requestBody));
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}