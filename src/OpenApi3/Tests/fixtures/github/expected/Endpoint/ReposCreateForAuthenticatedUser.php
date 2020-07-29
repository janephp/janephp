<?php

namespace Github\Endpoint;

class ReposCreateForAuthenticatedUser extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
    * Creates a new repository for the authenticated user.
    
    **OAuth scope requirements**
    
    When using [OAuth](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/), authorizations must include:
    
    *   `public_repo` scope or `repo` scope to create a public repository
    *   `repo` scope to create a private repository
    *
    * @param \Github\Model\UserReposPostBody $requestBody 
    */
    public function __construct(\Github\Model\UserReposPostBody $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/user/repos';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\UserReposPostBody) {
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
     * @throws \Github\Exception\ReposCreateForAuthenticatedUserUnauthorizedException
     * @throws \Github\Exception\ReposCreateForAuthenticatedUserNotFoundException
     * @throws \Github\Exception\ReposCreateForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\ReposCreateForAuthenticatedUserUnprocessableEntityException
     * @throws \Github\Exception\ReposCreateForAuthenticatedUserBadRequestException
     *
     * @return null|\Github\Model\Repository
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Repository', 'json');
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposCreateForAuthenticatedUserUnauthorizedException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (304 === $status) {
            return null;
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposCreateForAuthenticatedUserNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposCreateForAuthenticatedUserForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposCreateForAuthenticatedUserUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposCreateForAuthenticatedUserBadRequestException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}