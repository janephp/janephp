<?php

namespace Github\Endpoint;

class IssuesUpdateMilestone extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
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
     * @param \Github\Model\ReposOwnerRepoMilestonesMilestoneNumberPatchBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $milestoneNumber, \Github\Model\ReposOwnerRepoMilestonesMilestoneNumberPatchBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->milestone_number = $milestoneNumber;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{milestone_number}'), array($this->owner, $this->repo, $this->milestone_number), '/repos/{owner}/{repo}/milestones/{milestone_number}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoMilestonesMilestoneNumberPatchBody) {
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
     * @return null|\Github\Model\Milestone
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Milestone', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}