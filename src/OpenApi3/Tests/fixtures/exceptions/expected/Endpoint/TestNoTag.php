<?php

namespace Jane\OpenApi3\Tests\Expected\Endpoint;

class TestNoTag extends \Jane\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    use \Jane\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
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
     * @throws \Jane\OpenApi3\Tests\Expected\Exception\TestNoTagBadRequestException
     * @throws \Jane\OpenApi3\Tests\Expected\Exception\TestNoTagNotFoundException
     * @throws \Jane\OpenApi3\Tests\Expected\Exception\TestNoTagInternalServerErrorException
     * @throws \Jane\OpenApi3\Tests\Expected\Exception\TestNoTagCustom600Exception
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Jane\OpenApi3\Tests\Expected\Exception\TestNoTagBadRequestException($serializer->deserialize($body, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Message', 'json'));
        }
        if (404 === $status) {
            throw new \Jane\OpenApi3\Tests\Expected\Exception\TestNoTagNotFoundException();
        }
        if (500 === $status) {
            throw new \Jane\OpenApi3\Tests\Expected\Exception\TestNoTagInternalServerErrorException();
        }
        if (is_null($contentType) === false && (600 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Jane\OpenApi3\Tests\Expected\Exception\TestNoTagCustom600Exception($serializer->deserialize($body, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Message', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}