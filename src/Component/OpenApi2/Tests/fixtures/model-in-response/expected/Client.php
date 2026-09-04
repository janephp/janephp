<?php

namespace Jane\Component\OpenApi2\Tests\Expected\ModelInResponse;

class Client extends \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Runtime\Client\Client
{
    /**
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\EmptySpace
     */
    public function getEmptyTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Endpoint\GetEmptyTest());
    }
    /**
     * @throws \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Exception\GetTestBadRequestException
     * @throws \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Exception\GetTestNotFoundException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\Schema
     */
    public function getTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Endpoint\GetTest());
    }
    /**
     * @param int $id id
     * @throws \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Exception\GetTestByIdBadRequestException
     * @throws \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Exception\GetTestByIdNotFoundException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\TestIdGetResponse200
     */
    public function getTestById(int $id)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Endpoint\GetTestById($id));
    }
    /**
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\Schema[]
     */
    public function getTestList()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Endpoint\GetTestList());
    }
    /**
     *
     * @return null|array|\Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\TestComplexListGetResponsedefault
     */
    public function getTestComplexList()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Endpoint\GetTestComplexList());
    }
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}