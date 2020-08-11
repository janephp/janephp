<?php

namespace Github\Endpoint;

class ReposDelete extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
    * Deleting a repository requires admin access. If OAuth is used, the `delete_repo` scope is required.
    
    If an organization owner has configured the organization to prevent members from deleting organization-owned
    repositories, you will get a `403 Forbidden` response.
    *
    * @param string $owner 
    * @param string $repo 
    */
    public function __construct(string $owner, string $repo)
    {
        $this->owner = $owner;
        $this->repo = $repo;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}');
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
     * @throws \Github\Exception\ReposDeleteForbiddenException
     * @throws \Github\Exception\ReposDeleteNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposDeleteForbiddenException($serializer->deserialize($body, 'Github\\Model\\ReposOwnerRepoDeleteResponse403', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposDeleteNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}