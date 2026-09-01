<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ModelInResponse;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\EmptySpace : \Psr\Http\Message\ResponseInterface)
     */
    public function getEmptyTest(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Endpoint\GetEmptyTest(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Exception\GetTestBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Exception\GetTestNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Schema : \Psr\Http\Message\ResponseInterface)
     */
    public function getTest(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Endpoint\GetTest(), $fetch);
    }
    /**
     * @param int $id id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Exception\GetTestByIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Exception\GetTestByIdNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\TestIdGetResponse200 : \Psr\Http\Message\ResponseInterface)
     */
    public function getTestById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Endpoint\GetTestById($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Schema[] : \Psr\Http\Message\ResponseInterface)
     */
    public function getTestList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Endpoint\GetTestList(), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}