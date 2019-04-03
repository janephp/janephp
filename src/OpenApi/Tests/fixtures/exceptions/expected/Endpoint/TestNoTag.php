<?php

namespace Jane\OpenApi\Tests\Expected\Endpoint;

class TestNoTag extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return '/test-exception';
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\OpenApi\Tests\Expected\Exception\TestNoTagBadRequestException
     * @throws \Jane\OpenApi\Tests\Expected\Exception\TestNoTagNotFoundException
     * @throws \Jane\OpenApi\Tests\Expected\Exception\TestNoTagInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Jane\OpenApi\Tests\Expected\Exception\TestNoTagBadRequestException($serializer->deserialize($body, 'Jane\\OpenApi\\Tests\\Expected\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Jane\OpenApi\Tests\Expected\Exception\TestNoTagNotFoundException();
        }
        if (500 === $status) {
            throw new \Jane\OpenApi\Tests\Expected\Exception\TestNoTagInternalServerErrorException();
        }
    }
}