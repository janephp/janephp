<?php

namespace Github\Endpoint;

class IssuesDeleteMilestone extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $milestone_number;
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $milestoneNumber milestone_number parameter
     */
    public function __construct(string $owner, string $repo, int $milestoneNumber)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->milestone_number = $milestoneNumber;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{milestone_number}'), array($this->owner, $this->repo, $this->milestone_number), '/repos/{owner}/{repo}/milestones/{milestone_number}');
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
     * @throws \Github\Exception\IssuesDeleteMilestoneNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\IssuesDeleteMilestoneNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}