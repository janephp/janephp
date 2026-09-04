<?php

namespace Jane\Component\OpenApi2\Tests\Expected\BodyParameter;

class Client extends \Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Runtime\Client\Client
{
    /**
     * @param string|resource $testString
     *
     * @return null
     */
    public function testSimpleBodyParameter($testString)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Endpoint\TestSimpleBodyParameter($testString));
    }
    /**
     * @param \Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Model\Schema $testObject
     *
     * @return null
     */
    public function testObjectBodyParameter(\Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Model\Schema $testObject)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Endpoint\TestObjectBodyParameter($testObject));
    }
    /**
     * @param \Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Model\Schema[] $testObjectList
     *
     * @return null
     */
    public function testObjectListBodyParameter(array $testObjectList)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Endpoint\TestObjectListBodyParameter($testObjectList));
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi2\Tests\Expected\BodyParameter\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}