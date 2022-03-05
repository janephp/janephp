<?php

namespace Docker\Api\Endpoint;

class SecretCreate extends \Docker\Api\Runtime\Client\BaseEndpoint implements \Docker\Api\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Docker\Api\Model\SecretsCreatePostBody $body 
     */
    public function __construct(\Docker\Api\Model\SecretsCreatePostBody $body)
    {
        $this->body = $body;
    }
    use \Docker\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/secrets/create';
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
     * @throws \Docker\Api\Exception\SecretCreateConflictException
     * @throws \Docker\Api\Exception\SecretCreateInternalServerErrorException
     * @throws \Docker\Api\Exception\SecretCreateServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\IdResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Docker\\Api\\Model\\IdResponse', 'json');
        }
        if (409 === $status) {
            throw new \Docker\Api\Exception\SecretCreateConflictException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\Api\Exception\SecretCreateInternalServerErrorException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'));
        }
        if (503 === $status) {
            throw new \Docker\Api\Exception\SecretCreateServiceUnavailableException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}