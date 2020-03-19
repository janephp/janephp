<?php

namespace Jane\OpenApi\Tests\Expected;

class Client extends \Jane\OpenApiRuntime\Client\Psr18Client
{
    /**
     * 
     *
     * @param \Jane\OpenApi\Tests\Expected\Model\TestGetBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTest(\Jane\OpenApi\Tests\Expected\Model\TestGetBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\GetTest($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \Jane\OpenApi\Tests\Expected\Model\TestPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function test(\Jane\OpenApi\Tests\Expected\Model\TestPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\Test($requestBody), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\OpenApi\Tests\Expected\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}