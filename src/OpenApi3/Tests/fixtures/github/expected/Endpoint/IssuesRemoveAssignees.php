<?php

namespace Github\Endpoint;

class IssuesRemoveAssignees extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    protected $issue_number;
    /**
     * Removes one or more assignees from an issue.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param \Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesDeleteBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $issueNumber, \Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesDeleteBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issue_number = $issueNumber;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{issue_number}'), array($this->owner, $this->repo, $this->issue_number), '/repos/{owner}/{repo}/issues/{issue_number}/assignees');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesDeleteBody) {
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
     * @return null|\Github\Model\IssueSimple
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\IssueSimple', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}