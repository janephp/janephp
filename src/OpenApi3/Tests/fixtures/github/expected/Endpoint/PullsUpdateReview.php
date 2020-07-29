<?php

namespace Github\Endpoint;

class PullsUpdateReview extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    protected $pull_number;
    protected $review_id;
    /**
     * Update the review summary comment with new text.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param int $reviewId review_id parameter
     * @param \Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdPutBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $pullNumber, int $reviewId, \Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdPutBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pull_number = $pullNumber;
        $this->review_id = $reviewId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{pull_number}', '{review_id}'), array($this->owner, $this->repo, $this->pull_number, $this->review_id), '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdPutBody) {
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
     * @throws \Github\Exception\PullsUpdateReviewUnprocessableEntityException
     *
     * @return null|\Github\Model\PullRequestReview
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\PullRequestReview', 'json');
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\PullsUpdateReviewUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationErrorSimple', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}