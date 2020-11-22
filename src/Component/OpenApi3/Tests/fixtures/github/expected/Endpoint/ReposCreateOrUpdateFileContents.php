<?php

namespace Github\Endpoint;

class ReposCreateOrUpdateFileContents extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $path;
    /**
     * Creates a new file or replaces an existing file in a repository.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $path path+ parameter
     * @param \Github\Model\ReposOwnerRepoContentsPathPutBody $requestBody 
     */
    public function __construct(string $owner, string $repo, string $path, \Github\Model\ReposOwnerRepoContentsPathPutBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->path = $path;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{path}'), array($this->owner, $this->repo, $this->path), '/repos/{owner}/{repo}/contents/{path}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoContentsPathPutBody) {
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
     * @throws \Github\Exception\ReposCreateOrUpdateFileContentsNotFoundException
     * @throws \Github\Exception\ReposCreateOrUpdateFileContentsUnprocessableEntityException
     * @throws \Github\Exception\ReposCreateOrUpdateFileContentsConflictException
     *
     * @return null|\Github\Model\FileCommit
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\FileCommit', 'json');
        }
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\FileCommit', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposCreateOrUpdateFileContentsNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposCreateOrUpdateFileContentsUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposCreateOrUpdateFileContentsConflictException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}