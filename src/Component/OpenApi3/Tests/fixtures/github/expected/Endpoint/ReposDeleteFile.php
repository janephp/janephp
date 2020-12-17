<?php

namespace Github\Endpoint;

class ReposDeleteFile extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $path;
    /**
    * Deletes a file in a repository.
    
    You can provide an additional `committer` parameter, which is an object containing information about the committer. Or, you can provide an `author` parameter, which is an object containing information about the author.
    
    The `author` section is optional and is filled in with the `committer` information if omitted. If the `committer` information is omitted, the authenticated user's information is used.
    
    You must provide values for both `name` and `email`, whether you choose to use `author` or `committer`. Otherwise, you'll receive a `422` status code.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $path path+ parameter
    * @param null|\Github\Model\ReposOwnerRepoContentsPathDeleteBody $requestBody 
    */
    public function __construct(string $owner, string $repo, string $path, ?\Github\Model\ReposOwnerRepoContentsPathDeleteBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->path = $path;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{path}'), array($this->owner, $this->repo, $this->path), '/repos/{owner}/{repo}/contents/{path}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoContentsPathDeleteBody) {
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
     * @throws \Github\Exception\ReposDeleteFileUnprocessableEntityException
     * @throws \Github\Exception\ReposDeleteFileNotFoundException
     * @throws \Github\Exception\ReposDeleteFileConflictException
     * @throws \Github\Exception\ReposDeleteFileServiceUnavailableException
     *
     * @return null|\Github\Model\FileCommit
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\FileCommit', 'json');
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposDeleteFileUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposDeleteFileNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposDeleteFileConflictException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (503 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposDeleteFileServiceUnavailableException($serializer->deserialize($body, 'Github\\Model\\ResponseServiceUnavailable', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}