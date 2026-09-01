<?php

namespace Jane\Component\OpenApi3\Tests\Expected;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Client
{
    /**
     *
     * @return null
     */
    public function testNoTag()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\TestNoTag());
    }
    /**
     *
     * @return null
     */
    public function getTestOperationUrl()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetTestOperationUrl());
    }
    /**
     *
     * @return null
     */
    public function getTestOperationUrlById()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetTestOperationUrlById());
    }
    /**
     *
     * @return null
     */
    public function getTestOperationUrlWithExtension()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetTestOperationUrlWithExtension());
    }
    /**
     *
     * @return null
     */
    public function deleteTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\DeleteTest());
    }
    /**
     *
     * @return null
     */
    public function getTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetTest());
    }
    /**
     *
     * @return null
     */
    public function headTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\HeadTest());
    }
    /**
     *
     * @return null
     */
    public function optionsTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\OptionsTest());
    }
    /**
     *
     * @return null
     */
    public function patchTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\PatchTest());
    }
    /**
     *
     * @return null
     */
    public function postTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\PostTest());
    }
    /**
     *
     * @return null
     */
    public function putTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\PutTest());
    }
    /**
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\Thing[]
     */
    public function getThings()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetThings());
    }
    /**
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\Thing[]
     */
    public function getThingsById()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetThingsById());
    }
    /**
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\Thing
     */
    public function getAnotherThing()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetAnotherThing());
    }
    /**
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\Thing
     */
    public function getAnotherThingById()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetAnotherThingById());
    }
    /**
     *
     * @return null
     */
    public function postNo200Thing()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\PostNo200Thing());
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}