<?php

namespace Jane\OpenApi2\Tests\Expected\Endpoint;

class TestNoTag extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/test-exception';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\OpenApi2\Tests\Expected\Exception\TestNoTagBadRequestException
     * @throws \Jane\OpenApi2\Tests\Expected\Exception\TestNoTagNotFoundException
     * @throws \Jane\OpenApi2\Tests\Expected\Exception\TestNoTagInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (400 === $status) {
            throw new \Jane\OpenApi2\Tests\Expected\Exception\TestNoTagBadRequestException($serializer->deserialize($body, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Jane\OpenApi2\Tests\Expected\Exception\TestNoTagNotFoundException();
        }
        if (500 === $status) {
            throw new \Jane\OpenApi2\Tests\Expected\Exception\TestNoTagInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}