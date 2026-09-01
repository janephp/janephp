<?php

namespace Jane\Component\OpenApi2\Tests\Expected;

class Client extends \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\Client
{
    /**
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Model\EmptySpace
     */
    public function getEmptyTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Endpoint\GetEmptyTest());
    }
    /**
     * @throws \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestBadRequestException
     * @throws \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestNotFoundException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Model\Schema
     */
    public function getTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Endpoint\GetTest());
    }
    /**
     * @param int $id id
     * @throws \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestByIdBadRequestException
     * @throws \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestByIdNotFoundException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Model\TestIdGetResponse200
     */
    public function getTestById(int $id)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Endpoint\GetTestById($id));
    }
    /**
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Model\Schema[]
     */
    public function getTestList()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Endpoint\GetTestList());
    }
    /**
     *
     * @return null|array|\Jane\Component\OpenApi2\Tests\Expected\Model\TestComplexListGetResponsedefault
     */
    public function getTestComplexList()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Endpoint\GetTestComplexList());
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi2\Tests\Expected\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}