<?php

namespace Jane\OpenApi2\Tests\Expected\Endpoint;

class BodyParameterTriggersContentTypeBeingSet extends \Jane\OpenApi2\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi2\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param string $testString 
     */
    public function __construct(string $testString)
    {
        $this->body = $testString;
    }
    use \Jane\OpenApi2\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/test-simple';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}