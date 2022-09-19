<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class HideReplyById extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $id;
    protected $accept;
    /**
     * Tweet ID in the path is that of the reply to hide.
     *
     * @param string $id The ID of the reply that you want to hide.
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Model\HideReplyRequest $requestBody 
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(string $id, ?\Jane\Component\OpenApi3\Tests\Expected\Model\HideReplyRequest $requestBody = null, array $accept = array())
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/labs/1/tweets/{id}/hidden');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\Model\HideReplyRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return array('Accept' => array('application/json', 'application/problem+json'));
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\HideReplyResponse|\Jane\Component\OpenApi3\Tests\Expected\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HideReplyResponse', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Error', 'json');
        }
        if (mb_strpos($contentType, 'application/problem+json') !== false) {
            return json_decode($body);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}