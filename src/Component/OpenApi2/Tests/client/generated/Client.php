<?php

namespace Jane\Component\OpenApi2\Tests\Client;

class Client extends \Jane\Component\OpenApi2\Tests\Client\Runtime\Client\Client
{
    /**
     * @throws \Jane\Component\OpenApi2\Tests\Client\Exception\GetEndpointUnauthorizedException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Client\Model\SimpleResponse
     */
    public function getEndpoint()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Client\Endpoint\GetEndpoint());
    }
    /**
     * @param \Jane\Component\OpenApi2\Tests\Client\Model\ThingInput $body
     * @throws \Jane\Component\OpenApi2\Tests\Client\Exception\CreateThingBadRequestException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Client\Model\Thing
     */
    public function createThing(\Jane\Component\OpenApi2\Tests\Client\Model\ThingInput $body)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Client\Endpoint\CreateThing($body));
    }
    /**
     * @param array{
     *    "name": string,
     *    "kind": string,
     * } $formParameters
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Client\Model\Thing
     */
    public function createFormThing(array $formParameters)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Client\Endpoint\CreateFormThing($formParameters));
    }
    /**
     * @param string $thingId
     * @throws \Jane\Component\OpenApi2\Tests\Client\Exception\DeleteThingNotFoundException
     *
     * @return null
     */
    public function deleteThing(string $thingId)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Client\Endpoint\DeleteThing($thingId));
    }
    /**
     * @param string $thingId
     * @param array{
     *    "q": string,
     *    "page"?: int,
     * } $queryParameters
     * @throws \Jane\Component\OpenApi2\Tests\Client\Exception\GetThingNotFoundException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Client\Model\Thing
     */
    public function getThing(string $thingId, array $queryParameters)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Client\Endpoint\GetThing($thingId, $queryParameters));
    }
    /**
     * @param string $thingId
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Client\Model\ThingDetails
     */
    public function getThingDetails(string $thingId)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Client\Endpoint\GetThingDetails($thingId));
    }
    /**
     * @param list<callable(\Symfony\Contracts\HttpClient\HttpClientInterface): \Symfony\Contracts\HttpClient\HttpClientInterface> $additionalPlugins HttpClientInterface decorator factories, applied left-to-right after the server URL decorator
     * @param list<\Symfony\Component\Serializer\Normalizer\NormalizerInterface|\Symfony\Component\Serializer\Normalizer\DenormalizerInterface> $additionalNormalizers
     */
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('http://127.0.0.1:4011/');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi2\Tests\Client\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi2\Tests\Client\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}