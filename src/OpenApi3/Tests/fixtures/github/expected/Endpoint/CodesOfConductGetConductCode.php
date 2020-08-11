<?php

namespace Github\Endpoint;

class CodesOfConductGetConductCode extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $key;
    /**
     * 
     *
     * @param string $key key parameter
     */
    public function __construct(string $key)
    {
        $this->key = $key;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{key}'), array($this->key), '/codes_of_conduct/{key}');
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
     * @throws \Github\Exception\CodesOfConductGetConductCodeNotFoundException
     * @throws \Github\Exception\CodesOfConductGetConductCodeUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\CodeOfConduct
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\CodeOfConduct', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\CodesOfConductGetConductCodeNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (304 === $status) {
            return null;
        }
        if (415 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\CodesOfConductGetConductCodeUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}