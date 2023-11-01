<?php

namespace Github\Endpoint;

class AppsResetAuthorization extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $client_id;
    protected $access_token;
    /**
    * **Deprecation Notice:** GitHub will replace and discontinue OAuth endpoints containing `access_token` in the path parameter. We are introducing new endpoints that allow you to securely manage tokens for OAuth Apps by using `access_token` as an input parameter. The OAuth Application API will be removed on May 5, 2021. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-app-endpoint/).
    
    OAuth applications can use this API method to reset a valid OAuth token without end-user involvement. Applications must save the "token" property in the response because changes take effect immediately. You must use [Basic Authentication](https://developer.github.com/v3/auth#basic-authentication) when accessing this endpoint, using the OAuth application's `client_id` and `client_secret` as the username and password. Invalid tokens will return `404 NOT FOUND`.
    *
    * @param string $clientId 
    * @param string $accessToken 
    */
    public function __construct(string $clientId, string $accessToken)
    {
        $this->client_id = $clientId;
        $this->access_token = $accessToken;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{client_id}', '{access_token}'], [$this->client_id, $this->access_token], '/applications/{client_id}/tokens/{access_token}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\Authorization
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Authorization', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}