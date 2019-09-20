<?php

namespace Jane\OpenApi\Tests\Expected\Endpoint;

class TestNoTag extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
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
    public function getExtraHeaders() : array
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
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
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