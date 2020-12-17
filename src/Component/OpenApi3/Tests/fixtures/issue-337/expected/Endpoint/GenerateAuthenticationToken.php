<?php

namespace CreditSafe\API\Endpoint;

class GenerateAuthenticationToken extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    /**
     * Enter your username and password into the request schema to generate an Authorization Token
     *
     * @param null|\CreditSafe\API\Model\AuthenticationRequest $requestBody 
     */
    public function __construct(?\CreditSafe\API\Model\AuthenticationRequest $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/authenticate';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \CreditSafe\API\Model\AuthenticationRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \CreditSafe\API\Exception\GenerateAuthenticationTokenUnauthorizedException
     * @throws \CreditSafe\API\Exception\GenerateAuthenticationTokenNotFoundException
     *
     * @return null|\CreditSafe\API\Model\AuthenticationSuccessResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'CreditSafe\\API\\Model\\AuthenticationSuccessResponse', 'json');
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\GenerateAuthenticationTokenUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\GenerateAuthenticationTokenNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}