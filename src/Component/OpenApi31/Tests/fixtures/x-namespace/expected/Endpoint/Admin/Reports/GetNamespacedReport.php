<?php

namespace Jane\Component\OpenApi31\Tests\Expected\XNamespace\Endpoint\Admin\Reports;

class GetNamespacedReport extends \Jane\Component\OpenApi31\Tests\Expected\XNamespace\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\XNamespace\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi31\Tests\Expected\XNamespace\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/namespaced-report';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\XNamespace\Model\Admin\Reports\NamespacedReportGetResponse200
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\XNamespace\Model\Admin\Reports\NamespacedReportGetResponse200', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}