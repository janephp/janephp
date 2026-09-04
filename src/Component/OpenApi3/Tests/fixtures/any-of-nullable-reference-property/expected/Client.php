<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Runtime\Client\Client
{
    /**
     * @throws \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Exception\GetUserNotFoundException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Model\Account
     */
    public function getUser()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Endpoint\GetUser());
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}