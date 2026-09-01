<?php

namespace Gounlaf\JanephpBug;

class Client extends \Gounlaf\JanephpBug\Runtime\Client\Client
{
    /**
     * @param int $id ID of the entity
     * @param \Gounlaf\JanephpBug\Model\PatchableEntity $requestBody
     * @throws \Gounlaf\JanephpBug\Exception\PatchEntityBadRequestException
     * @throws \Gounlaf\JanephpBug\Exception\PatchEntityNotFoundException
     *
     * @return null
     */
    public function patchEntity(int $id, \Gounlaf\JanephpBug\Model\PatchableEntity $requestBody)
    {
        return $this->executeEndpoint(new \Gounlaf\JanephpBug\Endpoint\PatchEntity($id, $requestBody));
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Gounlaf\JanephpBug\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Gounlaf\JanephpBug\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}