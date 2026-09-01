<?php

namespace Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean;

class Client extends \Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Runtime\Client\Client
{
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Model\FileDepositPostBody $requestBody
     *
     * @return null|string
     */
    public function postFileDeposit(?\Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Model\FileDepositPostBody $requestBody = null)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Endpoint\PostFileDeposit($requestBody));
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}