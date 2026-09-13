<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ScalarResponse;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Runtime\Client\Client
{
    /**
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Exception\BadResponseException
     *
     * @return int
     */
    public function getInteger()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetInteger());
    }
    /**
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Exception\BadResponseException
     *
     * @return string
     */
    public function getString()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetString());
    }
    /**
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Exception\BadResponseException
     *
     * @return bool
     */
    public function getBoolean()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetBoolean());
    }
    /**
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Exception\BadResponseException
     *
     * @return float
     */
    public function getNumberFloat()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetNumberFloat());
    }
    /**
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Exception\BadResponseException
     *
     * @return int
     */
    public function getNumberPlain()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetNumberPlain());
    }
    /**
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Exception\BadResponseException
     *
     * @return string
     */
    public function getEnumWithoutType()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetEnumWithoutType());
    }
    /**
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Exception\BadResponseException
     *
     * @return array
     */
    public function getArrayOfIntegers()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetArrayOfIntegers());
    }
    /**
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Exception\BadResponseException
     *
     * @return int
     */
    public function getNullableInteger()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetNullableInteger());
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}