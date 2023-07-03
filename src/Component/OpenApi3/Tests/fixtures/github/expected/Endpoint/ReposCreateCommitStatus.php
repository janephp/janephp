<?php

namespace Github\Endpoint;

class ReposCreateCommitStatus extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
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
    * @param null|\Github\Model\ReposOwnerRepoStatusesShaPostBody $requestBody 
    */
    public function __construct(string $owner, string $repo, string $sha, ?\Github\Model\ReposOwnerRepoStatusesShaPostBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->sha = $sha;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
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
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize((string) $body, 'Github\\Model\\Status', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}