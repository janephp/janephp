<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Operations;

class Client extends \Jane\Component\OpenApi2\Tests\Expected\Operations\Runtime\Client\Client
{
    /**
     *
     * @return null
     */
    public function testNoTag()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\TestNoTag());
    }
    /**
     *
     * @return null
     */
    public function getTestOperationUrl()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\GetTestOperationUrl());
    }
    /**
     *
     * @return null
     */
    public function getTestOperationUrlById()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\GetTestOperationUrlById());
    }
    /**
     *
     * @return null
     */
    public function getTestOperationUrlWithExtension()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\GetTestOperationUrlWithExtension());
    }
    /**
     *
     * @return null
     */
    public function deleteTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\DeleteTest());
    }
    /**
     *
     * @return null
     */
    public function getTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\GetTest());
    }
    /**
     *
     * @return null
     */
    public function headTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\HeadTest());
    }
    /**
     *
     * @return null
     */
    public function optionsTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\OptionsTest());
    }
    /**
     *
     * @return null
     */
    public function patchTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\PatchTest());
    }
    /**
     *
     * @return null
     */
    public function postTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\PostTest());
    }
    /**
     *
     * @return null
     */
    public function putTest()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\PutTest());
    }
    /**
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Operations\Model\Thing[]
     */
    public function getThings()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\GetThings());
    }
    /**
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Operations\Model\Thing[]
     */
    public function getThingsById()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\GetThingsById());
    }
    /**
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Operations\Model\Thing
     */
    public function getAnotherThing()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\GetAnotherThing());
    }
    /**
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Operations\Model\Thing
     */
    public function getAnotherThingById()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\GetAnotherThingById());
    }
    /**
     *
     * @return null
     */
    public function postNo200Thing()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Operations\Endpoint\PostNo200Thing());
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi2\Tests\Expected\Operations\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi2\Tests\Expected\Operations\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}