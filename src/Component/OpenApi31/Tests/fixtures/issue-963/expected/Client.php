<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue963;

class Client extends \Jane\Component\OpenApi31\Tests\Expected\Issue963\Runtime\Client\Client
{
    /**
     * @param string $selector
     * @param array $accept Accept content header application/json|application/json;schema=member-details
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Issue963\Model\MemberDetails|\Jane\Component\OpenApi31\Tests\Expected\Issue963\Model\RequestError : \Psr\Http\Message\ResponseInterface)
     */
    public function getMemberBySelector(string $selector, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Issue963\Endpoint\GetMemberBySelector($selector, $accept), $fetch);
    }
    public static function create(?\Psr\Http\Client\ClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
        }
        if ($applyServerPlugins) {
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://server/ipnoos/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\Expected\Issue963\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi31\Tests\Expected\Issue963\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}