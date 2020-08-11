<?php

namespace Github\Endpoint;

class PullsRequestReviewers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $pull_number;
    /**
     * This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersPostBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $pullNumber, \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersPostBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pull_number = $pullNumber;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{pull_number}'), array($this->owner, $this->repo, $this->pull_number), '/repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersPostBody) {
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
     * @throws \Github\Exception\PullsRequestReviewersUnprocessableEntityException
     * @throws \Github\Exception\PullsRequestReviewersForbiddenException
     *
     * @return null|\Github\Model\PullRequestSimple
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\PullRequestSimple', 'json');
        }
        if (422 === $status) {
            throw new \Github\Exception\PullsRequestReviewersUnprocessableEntityException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\PullsRequestReviewersForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}