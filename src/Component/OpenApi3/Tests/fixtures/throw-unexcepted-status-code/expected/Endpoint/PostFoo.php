<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class PostFoo extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Model\FooPayload $requestBody 
     */
    public function __construct(?\Jane\Component\OpenApi3\Tests\Expected\Model\FooPayload $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/foo';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\Model\FooPayload) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\UnexpectedStatusCodeException
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (200 === $status) {
            return $body;
        }
        throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\UnexpectedStatusCodeException($status, (string) $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}