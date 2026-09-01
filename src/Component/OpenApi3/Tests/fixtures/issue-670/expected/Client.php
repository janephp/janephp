<?php

namespace Jane\Component\OpenApi3\Tests\Expected;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Client
{
    /**
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint1GetResponse
     */
    public function getEndpoint1()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetEndpoint1());
    }
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint1PostBody $requestBody
     *
     * @return null
     */
    public function postEndpoint1(?\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint1PostBody $requestBody = null)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\PostEndpoint1($requestBody));
    }
    /**
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint2GetResponse200
     */
    public function getEndpoint2()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetEndpoint2());
    }
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint2PostBody $requestBody
     *
     * @return null
     */
    public function postEndpoint2(?\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint2PostBody $requestBody = null)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\PostEndpoint2($requestBody));
    }
    /**
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint3GetResponse200
     */
    public function getEndpoint3()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetEndpoint3());
    }
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint3PostBody $requestBody
     *
     * @return null
     */
    public function postEndpoint3(?\Jane\Component\OpenApi3\Tests\Expected\Model\Endpoint3PostBody $requestBody = null)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\PostEndpoint3($requestBody));
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}