<?php

namespace Docker\Api\Endpoint;

class ConfigCreate extends \Docker\Api\Runtime\Client\BaseEndpoint implements \Docker\Api\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Docker\Api\Model\ConfigsCreatePostBody $body 
     */
    public function __construct(\Docker\Api\Model\ConfigsCreatePostBody $body)
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
        return '/configs/create';
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
     * @throws \Docker\Api\Exception\ConfigCreateConflictException
     * @throws \Docker\Api\Exception\ConfigCreateInternalServerErrorException
     * @throws \Docker\Api\Exception\ConfigCreateServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\IdResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Docker\\Api\\Model\\IdResponse', 'json');
        }
        if (409 === $status) {
            throw new \Docker\Api\Exception\ConfigCreateConflictException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\Api\Exception\ConfigCreateInternalServerErrorException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'));
        }
        if (503 === $status) {
            throw new \Docker\Api\Exception\ConfigCreateServiceUnavailableException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}