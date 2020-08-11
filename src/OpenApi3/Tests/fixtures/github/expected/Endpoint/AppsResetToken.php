<?php

namespace Github\Endpoint;

class AppsResetToken extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $client_id;
    /**
     * OAuth applications can use this API method to reset a valid OAuth token without end-user involvement. Applications must save the "token" property in the response because changes take effect immediately. You must use [Basic Authentication](https://developer.github.com/v3/auth#basic-authentication) when accessing this endpoint, using the OAuth application's `client_id` and `client_secret` as the username and password. Invalid tokens will return `404 NOT FOUND`.
     *
     * @param string $clientId 
     * @param \Github\Model\ApplicationsClientIdTokenPatchBody $requestBody 
     */
    public function __construct(string $clientId, \Github\Model\ApplicationsClientIdTokenPatchBody $requestBody)
    {
        $this->client_id = $clientId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{client_id}'), array($this->client_id), '/applications/{client_id}/token');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ApplicationsClientIdTokenPatchBody) {
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
     * @throws \Github\Exception\AppsResetTokenUnprocessableEntityException
     *
     * @return null|\Github\Model\Authorization
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Authorization', 'json');
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\AppsResetTokenUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}