<?php

namespace Jane\Component\OpenApi31\Tests\Expected\XNamespace;

class Client extends \Jane\Component\OpenApi31\Tests\Expected\XNamespace\Runtime\Client\Client
{
    /**
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\XNamespace\Model\FlatItem
     */
    public function getFlatItems()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\XNamespace\Endpoint\GetFlatItems());
    }
    /**
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\XNamespace\Model\Admin\Reports\NamespacedReportGetResponse200
     */
    public function getNamespacedReport()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\XNamespace\Endpoint\Admin\Reports\GetNamespacedReport());
    }
    /**
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\XNamespace\Model\Catalog\TaggedItem
     */
    public function getTaggedItems()
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\XNamespace\Endpoint\Ops\Monitoring\GetTaggedItems());
    }
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://api.example.com/v1');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\Expected\XNamespace\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi31\Tests\Expected\XNamespace\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}