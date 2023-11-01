<?php

namespace Github\Endpoint;

class IssuesUpdate extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $issue_number;
    /**
     * Issue owners and users with push access can edit an issue.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param null|\Github\Model\ReposOwnerRepoIssuesIssueNumberPatchBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $issueNumber, ?\Github\Model\ReposOwnerRepoIssuesIssueNumberPatchBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issue_number = $issueNumber;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}', '{issue_number}'], [$this->owner, $this->repo, $this->issue_number], '/repos/{owner}/{repo}/issues/{issue_number}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoIssuesIssueNumberPatchBody) {
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
     * @throws \Github\Exception\IssuesUpdateUnprocessableEntityException
     * @throws \Github\Exception\IssuesUpdateServiceUnavailableException
     * @throws \Github\Exception\IssuesUpdateForbiddenException
     * @throws \Github\Exception\IssuesUpdateNotFoundException
     * @throws \Github\Exception\IssuesUpdateGoneException
     *
     * @return null|\Github\Model\Issue
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Issue', 'json');
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\IssuesUpdateUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\IssuesUpdateServiceUnavailableException($serializer->deserialize($body, 'Github\\Model\\ResponseServiceUnavailable', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\IssuesUpdateForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (301 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\IssuesUpdateNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (410 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\IssuesUpdateGoneException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}