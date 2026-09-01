<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exceptions\Endpoint;

class TestNoTag extends \Jane\Component\OpenApi3\Tests\Expected\Exceptions\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Exceptions\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Expected\Exceptions\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/test-exception';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exceptions\Exception\TestNoTagBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exceptions\Exception\TestNoTagNotFoundException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exceptions\Exception\TestNoTagInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exceptions\Exception\TestNoTagBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Exceptions\Model\Message', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exceptions\Exception\TestNoTagNotFoundException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exceptions\Exception\TestNoTagInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}