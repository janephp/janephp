<?php

namespace Github\Endpoint;

class IssuesCreateComment extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $issue_number;
    /**
     * This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param null|\Github\Model\ReposOwnerRepoIssuesIssueNumberCommentsPostBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $issueNumber, ?\Github\Model\ReposOwnerRepoIssuesIssueNumberCommentsPostBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issue_number = $issueNumber;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{issue_number}'), array($this->owner, $this->repo, $this->issue_number), '/repos/{owner}/{repo}/issues/{issue_number}/comments');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoIssuesIssueNumberCommentsPostBody) {
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
     * @throws \Github\Exception\IssuesCreateCommentForbiddenException
     * @throws \Github\Exception\IssuesCreateCommentGoneException
     * @throws \Github\Exception\IssuesCreateCommentUnprocessableEntityException
     * @throws \Github\Exception\IssuesCreateCommentNotFoundException
     *
     * @return null|\Github\Model\IssueComment
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\IssueComment', 'json');
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\IssuesCreateCommentForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (410 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\IssuesCreateCommentGoneException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\IssuesCreateCommentUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\IssuesCreateCommentNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}