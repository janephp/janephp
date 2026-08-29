<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class PostFoo extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Model\FooPayload $requestBody
     */
    public function __construct(?\Jane\Component\OpenApi3\Tests\Expected\Model\FooPayload $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/foo';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\Model\FooPayload) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PostFooBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PostFooInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\BadResponseException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\PostFooBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\PostFooInternalServerErrorException($serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse500', 'json'), $response);
        }
        throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}