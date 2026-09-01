<?php

namespace Jane\Component\OpenApi3\Tests\Expected\UppercaseParameter\Endpoint;

class TestGetWithUppercasePathParameters extends \Jane\Component\OpenApi3\Tests\Expected\UppercaseParameter\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\UppercaseParameter\Runtime\Client\Endpoint
{
    protected $test_parameter;
    /**
     * @param mixed $testParameter
     */
    public function __construct($testParameter)
    {
        $this->test_parameter = $testParameter;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\UppercaseParameter\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{test-parameter}'], [rawurlencode($this->test_parameter)], '/test-uppercase-path-parameters/{test-parameter}');
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