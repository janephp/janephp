<?php

namespace Github\Endpoint;

class IssuesCheckUserCanBeAssigned extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $assignee;
    /**
    * Checks if a user has permission to be assigned to an issue in this repository.
    
    If the `assignee` can be assigned to issues in the repository, a `204` header with no content is returned.
    
    Otherwise a `404` status code is returned.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $assignee assignee parameter
    */
    public function __construct(string $owner, string $repo, string $assignee)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->assignee = $assignee;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{assignee}'), array($this->owner, $this->repo, $this->assignee), '/repos/{owner}/{repo}/assignees/{assignee}');
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
     * @throws \Github\Exception\IssuesCheckUserCanBeAssignedNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\IssuesCheckUserCanBeAssignedNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}