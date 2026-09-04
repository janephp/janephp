<?php

namespace Jane\Component\OpenApi2\Tests\Expected\ContentType\Endpoint;

class BodyParameterTriggersContentTypeBeingSet extends \Jane\Component\OpenApi2\Tests\Expected\ContentType\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\ContentType\Runtime\Client\Endpoint
{
    /**
     * @param string $testString
     */
    public function __construct(string $testString)
    {
        $this->body = $testString;
    }
    use \Jane\Component\OpenApi2\Tests\Expected\ContentType\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/test-simple';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}