<?php

namespace Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Runtime\Client\Client
{
    /**
     * @param \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model\MessageM700PostBody $requestBody
     *
     * @return null
     */
    public function postMessageM700(\Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model\MessageM700PostBody $requestBody)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Endpoint\PostMessageM700($requestBody));
    }
    /**
     * @param \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model\MessageM70047PostBody $requestBody
     *
     * @return null
     */
    public function postMessageM70047(\Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model\MessageM70047PostBody $requestBody)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Endpoint\PostMessageM70047($requestBody));
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}