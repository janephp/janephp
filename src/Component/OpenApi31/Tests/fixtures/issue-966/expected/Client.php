<?php

namespace Jane\Component\OpenApi31\Tests\Expected;

class Client extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\Order : \Psr\Http\Message\ResponseInterface)
     */
    public function getOrder(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetOrder(), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
        }
        if ($applyServerPlugins) {
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.example.com/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\Expected\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}