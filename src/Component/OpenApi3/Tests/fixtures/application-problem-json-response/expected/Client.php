<?php

namespace Jane\Component\OpenApi3\Tests\Expected;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Client
{
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Model\FooPayload $requestBody
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PostFooBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PostFooInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\BadResponseException
     *
     * @return null
     */
    public function postFoo(?\Jane\Component\OpenApi3\Tests\Expected\Model\FooPayload $requestBody = null)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\PostFoo($requestBody));
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