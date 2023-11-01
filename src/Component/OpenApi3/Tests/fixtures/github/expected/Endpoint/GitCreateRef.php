<?php

namespace Github\Endpoint;

class GitCreateRef extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
     * Creates a reference for your repository. You are unable to create new references for empty repositories, even if the commit SHA-1 hash used exists. Empty repositories are repositories without branches.
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoGitRefsPostBody $requestBody 
     */
    public function __construct(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoGitRefsPostBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/git/refs');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoGitRefsPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\GitCreateRefUnprocessableEntityException
     *
     * @return null|\Github\Model\GitRef
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\GitRef', 'json');
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\GitCreateRefUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}