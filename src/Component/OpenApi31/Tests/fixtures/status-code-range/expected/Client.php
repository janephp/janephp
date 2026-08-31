<?php

namespace Jane\Component\OpenApi31\Tests\StatusCodeRange;

class Client extends \Jane\Component\OpenApi31\Tests\StatusCodeRange\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception\GetFooNotFoundException
     * @throws \Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception\GetFooClientErrorException
     * @throws \Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception\GetFooServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\StatusCodeRange\Model\Message : \Psr\Http\Message\ResponseInterface)
     */
    public function getFoo(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\StatusCodeRange\Endpoint\GetFoo(), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\StatusCodeRange\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi31\Tests\StatusCodeRange\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}