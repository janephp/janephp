<?php

namespace Jane\OpenApi2\Tests\Expected;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     *
     *
     * @param string $testString
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function bodyParameterTriggersContentTypeBeingSet(string $testString, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi2\Tests\Expected\Endpoint\BodyParameterTriggersContentTypeBeingSet($testString), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function producesTriggersAcceptBeingSet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi2\Tests\Expected\Endpoint\ProducesTriggersAcceptBeingSet(), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(\Jane\OpenApi2\Tests\Expected\Normalizer\NormalizerFactory::create(), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}
