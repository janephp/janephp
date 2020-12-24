<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Endpoint;

class ShowPetById extends \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\Endpoint
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
    use \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\EndpointTrait;
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
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Model\Pet[]|\Jane\Component\OpenApi2\Tests\Expected\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Pet[]', 'json');
        }
        return $serializer->deserialize($body, 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}