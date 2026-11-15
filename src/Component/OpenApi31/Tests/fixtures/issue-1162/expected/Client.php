<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue1162;

class Client extends \Jane\Component\OpenApi31\Tests\Expected\Issue1162\Runtime\Client\Client
{
    /**
     * @param \Jane\Component\OpenApi31\Tests\Expected\Issue1162\Model\WebhooksPetCreatedPostBody $requestBody
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Issue1162\Exception\BadResponseException
     *
     * @return null
     */
    public function postWebhooksPetCreated(\Jane\Component\OpenApi31\Tests\Expected\Issue1162\Model\WebhooksPetCreatedPostBody $requestBody)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Issue1162\Endpoint\PostWebhooksPetCreated($requestBody));
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\Expected\Issue1162\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi31\Tests\Expected\Issue1162\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}