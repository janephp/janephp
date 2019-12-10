<?php

namespace Jane\OpenApi2\Tests\Expected\Endpoint;

class ShowPetById extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $petId;
    /**
     * 
     *
     * @param string $petId The id of the pet to retrieve
     */
    public function __construct(string $petId)
    {
        $this->petId = $petId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{petId}'), array($this->petId), '/pets/{petId}');
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
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\Model\Pet[]|\Jane\OpenApi2\Tests\Expected\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\\OpenApi\\Tests\\Expected\\Model\\Pet[]', 'json');
        }
        return $serializer->deserialize($body, 'Jane\\OpenApi\\Tests\\Expected\\Model\\Error', 'json');
    }
}
