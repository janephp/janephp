<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Runtime\Client\Client
{
    /**
     * @param string $parentId
     * @param string $childId
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Model\Child
     */
    public function getParentsByParentIdChildChildId(string $parentId, string $childId)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Endpoint\GetParentsByParentIdChildChildId($parentId, $childId));
    }
    /**
     * @param string $parentId
     * @param string $childId
     * @param \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Model\ParentsParentIdChildChildIdPatchBody $requestBody
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Model\Child
     */
    public function patchParentsByParentIdChildChildId(string $parentId, string $childId, \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Model\ParentsParentIdChildChildIdPatchBody $requestBody)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Endpoint\PatchParentsByParentIdChildChildId($parentId, $childId, $requestBody));
    }
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://acme.localhost/v1');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}