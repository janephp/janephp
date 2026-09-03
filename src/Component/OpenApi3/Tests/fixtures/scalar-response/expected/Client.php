<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ScalarResponse;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Runtime\Client\Client
{
    /**
     *
     * @return null|int
     */
    public function getInteger()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetInteger());
    }
    /**
     *
     * @return null|string
     */
    public function getString()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetString());
    }
    /**
     *
     * @return null|bool
     */
    public function getBoolean()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetBoolean());
    }
    /**
     *
     * @return null|float
     */
    public function getNumberFloat()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetNumberFloat());
    }
    /**
     *
     * @return null|int
     */
    public function getNumberPlain()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetNumberPlain());
    }
    /**
     *
     * @return null|string
     */
    public function getEnumWithoutType()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetEnumWithoutType());
    }
    /**
     *
     * @return null|array
     */
    public function getArrayOfIntegers()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetArrayOfIntegers());
    }
    /**
     *
     * @return null|int
     */
    public function getNullableInteger()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Endpoint\GetNullableInteger());
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\ScalarResponse\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}