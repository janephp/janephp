<?php

namespace Jane\Component\OpenApi31\Tests\ExpectedIssue1036;

class Client extends \Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Runtime\Client\Client
{
    /**
     * @param \Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Model\DocumentUpload $requestBody
     *
     * @return null|\Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Model\Document
     */
    public function uploadDocument(\Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Model\DocumentUpload $requestBody)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Endpoint\UploadDocument($requestBody));
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}