<?php

namespace Jane\Component\OpenApi2\Tests\Expected\XNamespace\Endpoint\Admin\Reports;

class GetNamespacedReport extends \Jane\Component\OpenApi2\Tests\Expected\XNamespace\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\XNamespace\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi2\Tests\Expected\XNamespace\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/namespaced-report';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\XNamespace\Model\Admin\Reports\NamespacedReportGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi2\Tests\Expected\XNamespace\Model\Admin\Reports\NamespacedReportGetResponse200', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}