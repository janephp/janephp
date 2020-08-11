<?php

namespace Github\Endpoint;

class ReposCreateCommitStatus extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $sha;
    /**
    * Users with push access in a repository can create commit statuses for a given SHA.
    
    Note: there is a limit of 1000 statuses per `sha` and `context` within a repository. Attempts to create more than 1000 statuses will result in a validation error.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $sha sha parameter
    * @param \Github\Model\ReposOwnerRepoStatusesShaPostBody $requestBody 
    */
    public function __construct(string $owner, string $repo, string $sha, \Github\Model\ReposOwnerRepoStatusesShaPostBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->sha = $sha;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{sha}'), array($this->owner, $this->repo, $this->sha), '/repos/{owner}/{repo}/statuses/{sha}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoStatusesShaPostBody) {
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
     *
     * @return null|\Github\Model\Status
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Status', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}