<?php

namespace Docker\Api\Endpoint;

class VolumeCreate extends \Docker\Api\Runtime\Client\BaseEndpoint implements \Docker\Api\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Docker\Api\Model\VolumesCreatePostBody $volumeConfig Volume configuration
     */
    public function __construct(\Docker\Api\Model\VolumesCreatePostBody $volumeConfig)
    {
        $this->body = $volumeConfig;
    }
    use \Docker\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/volumes/create';
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
     * @throws \Docker\Api\Exception\VolumeCreateInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\Volume
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Docker\\Api\\Model\\Volume', 'json');
        }
        if (500 === $status) {
            throw new \Docker\Api\Exception\VolumeCreateInternalServerErrorException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}