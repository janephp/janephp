<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Endpoint;

class PostFoo extends \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Runtime\Client\Endpoint
{
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Model\FooPayload $requestBody
     */
    public function __construct(?\Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Model\FooPayload $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/foo';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Model\FooPayload) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/problem+json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Exception\PostFooBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Exception\PostFooInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Exception\BadResponseException
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
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Exception\PostFooBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Model\ResponseProblemDetailsResponse400', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Exception\PostFooInternalServerErrorException($serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Model\ResponseProblemDetailsResponse500', 'json'), $response);
        }
        throw new \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Exception\BadResponseException($status, $body, $response);
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