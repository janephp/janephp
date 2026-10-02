<?php

namespace Jane\Component\OpenApi3\Tests\Expected\BooleanPathParameter;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\BooleanPathParameter\Runtime\Client\Client
{
    /**
     * @param bool $active Filter by active state
     * @throws \Jane\Component\OpenApi3\Tests\Expected\BooleanPathParameter\Exception\BadResponseException
     *
     * @return string
     */
    public function getFlagByActive(bool $active)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\BooleanPathParameter\Endpoint\GetFlagByActive($active));
    }
    /**
     * @param list<callable(\Symfony\Contracts\HttpClient\HttpClientInterface): \Symfony\Contracts\HttpClient\HttpClientInterface> $additionalPlugins HttpClientInterface decorator factories, applied left-to-right after the server URL decorator
     * @param list<\Symfony\Component\Serializer\Normalizer\NormalizerInterface|\Symfony\Component\Serializer\Normalizer\DenormalizerInterface> $additionalNormalizers
     */
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\BooleanPathParameter\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\BooleanPathParameter\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}