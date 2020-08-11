<?php

namespace Github\Endpoint;

class AppsCreateInstallationAccessToken extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $installation_id;
    /**
    * Creates an installation access token that enables a GitHub App to make authenticated API requests for the app's installation on an organization or individual account. Installation tokens expire one hour from the time you create them. Using an expired token produces a status code of `401 - Unauthorized`, and requires creating a new installation token. By default the installation token has access to all repositories that the installation can access. To restrict the access to specific repositories, you can provide the `repository_ids` when creating the token. When you omit `repository_ids`, the response does not contain the `repositories` key.
    
    You must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint.
    *
    * @param int $installationId installation_id parameter
    * @param \Github\Model\AppInstallationsInstallationIdAccessTokensPostBody $requestBody 
    */
    public function __construct(int $installationId, \Github\Model\AppInstallationsInstallationIdAccessTokensPostBody $requestBody)
    {
        $this->installation_id = $installationId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{installation_id}'), array($this->installation_id), '/app/installations/{installation_id}/access_tokens');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\AppInstallationsInstallationIdAccessTokensPostBody) {
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
     * @throws \Github\Exception\AppsCreateInstallationAccessTokenForbiddenException
     * @throws \Github\Exception\AppsCreateInstallationAccessTokenUnsupportedMediaTypeException
     * @throws \Github\Exception\AppsCreateInstallationAccessTokenUnauthorizedException
     * @throws \Github\Exception\AppsCreateInstallationAccessTokenNotFoundException
     * @throws \Github\Exception\AppsCreateInstallationAccessTokenUnprocessableEntityException
     *
     * @return null|\Github\Model\InstallationToken
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\InstallationToken', 'json');
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\AppsCreateInstallationAccessTokenForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (415 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\AppsCreateInstallationAccessTokenUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\AppsCreateInstallationAccessTokenUnauthorizedException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\AppsCreateInstallationAccessTokenNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\AppsCreateInstallationAccessTokenUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}