<?php

namespace Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Runtime\Client\Client
{
    /**
     * @param \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model\MessageM700PostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function postMessageM700(\Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model\MessageM700PostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Endpoint\PostMessageM700($requestBody), $fetch);
    }
    /**
     * @param \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model\MessageM70047PostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function postMessageM70047(\Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model\MessageM70047PostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Endpoint\PostMessageM70047($requestBody), $fetch);
    }
    public static function create(?\Psr\Http\Client\ClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}