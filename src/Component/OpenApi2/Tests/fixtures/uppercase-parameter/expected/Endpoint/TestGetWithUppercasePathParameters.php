<?php

namespace Jane\Component\OpenApi2\Tests\Expected\UppercaseParameter\Endpoint;

class TestGetWithUppercasePathParameters extends \Jane\Component\OpenApi2\Tests\Expected\UppercaseParameter\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\UppercaseParameter\Runtime\Client\Endpoint
{
    protected $TestParameter;
    /**
     * @param string $testParameter
     */
    public function __construct(string $testParameter)
    {
        $this->TestParameter = $testParameter;
    }
    use \Jane\Component\OpenApi2\Tests\Expected\UppercaseParameter\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{TestParameter}'], [rawurlencode($this->TestParameter)], '/test-uppercase-path-parameters/{TestParameter}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
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