<?php

namespace Github\Endpoint;

class PullsDismissReview extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $pull_number;
    protected $review_id;
    /**
     * **Note:** To dismiss a pull request review on a [protected branch](https://developer.github.com/v3/repos/branches/), you must be a repository administrator or be included in the list of people or teams who can dismiss pull request reviews.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param int $reviewId review_id parameter
     * @param null|\Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdDismissalsPutBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $pullNumber, int $reviewId, ?\Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdDismissalsPutBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pull_number = $pullNumber;
        $this->review_id = $reviewId;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{pull_number}', '{review_id}'), array($this->owner, $this->repo, $this->pull_number, $this->review_id), '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/dismissals');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdDismissalsPutBody) {
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
     * @throws \Github\Exception\PullsDismissReviewNotFoundException
     * @throws \Github\Exception\PullsDismissReviewUnprocessableEntityException
     *
     * @return null|\Github\Model\PullRequestReview
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\PullRequestReview', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\PullsDismissReviewNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\PullsDismissReviewUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationErrorSimple', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}