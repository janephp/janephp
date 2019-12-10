<?php

namespace Jane\OpenApi2\Tests\Expected;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\Model\EmptySpace|\Psr\Http\Message\ResponseInterface
     */
    public function getEmptyTest(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi2\Tests\Expected\Endpoint\GetEmptyTest(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\OpenApi2\Tests\Expected\Exception\GetTestBadRequestException
     * @throws \Jane\OpenApi2\Tests\Expected\Exception\GetTestNotFoundException
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\Model\Schema|\Psr\Http\Message\ResponseInterface
     */
    public function getTest(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi2\Tests\Expected\Endpoint\GetTest(), $fetch);
    }
    /**
     * 
     *
     * @param int $id id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\OpenApi2\Tests\Expected\Exception\GetTestByIdBadRequestException
     * @throws \Jane\OpenApi2\Tests\Expected\Exception\GetTestByIdNotFoundException
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\Model\TestIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getTestById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi2\Tests\Expected\Endpoint\GetTestById($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\Model\Schema[]|\Psr\Http\Message\ResponseInterface
     */
    public function getTestList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi2\Tests\Expected\Endpoint\GetTestList(), $fetch);
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
