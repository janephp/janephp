<?php

namespace Jane\OpenApi\Tests\Expected;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function testNoTag(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\TestNoTag(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTestOperationUrl(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\GetTestOperationUrl(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTestOperationUrlById(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\GetTestOperationUrlById(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTestOperationUrlWithExtension(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\GetTestOperationUrlWithExtension(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTest(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\DeleteTest(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTest(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\GetTest(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function headTest(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\HeadTest(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function optionsTest(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\OptionsTest(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchTest(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\PatchTest(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postTest(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\PostTest(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putTest(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\PutTest(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\Thing[]|\Psr\Http\Message\ResponseInterface
     */
    public function getThings(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\GetThings(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\Thing[]|\Psr\Http\Message\ResponseInterface
     */
    public function getThingsById(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\GetThingsById(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\Thing|\Psr\Http\Message\ResponseInterface
     */
    public function getAnotherThing(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\GetAnotherThing(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\Thing|\Psr\Http\Message\ResponseInterface
     */
    public function getAnotherThingById(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\GetAnotherThingById(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postNo200Thing(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\PostNo200Thing(), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\OpenApi\Tests\Expected\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}