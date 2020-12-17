<?php

namespace Github\Endpoint;

class PullsCreateReplyForReviewComment extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $pull_number;
    protected $comment_id;
    /**
    * Creates a reply to a review comment for a pull request. For the `comment_id`, provide the ID of the review comment you are replying to. This must be the ID of a _top-level review comment_, not a reply to that comment. Replies to replies are not supported.
    
    This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $pullNumber 
    * @param int $commentId comment_id parameter
    * @param null|\Github\Model\ReposOwnerRepoPullsPullNumberCommentsCommentIdRepliesPostBody $requestBody 
    */
    public function __construct(string $owner, string $repo, int $pullNumber, int $commentId, ?\Github\Model\ReposOwnerRepoPullsPullNumberCommentsCommentIdRepliesPostBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pull_number = $pullNumber;
        $this->comment_id = $commentId;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{pull_number}', '{comment_id}'), array($this->owner, $this->repo, $this->pull_number, $this->comment_id), '/repos/{owner}/{repo}/pulls/{pull_number}/comments/{comment_id}/replies');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoPullsPullNumberCommentsCommentIdRepliesPostBody) {
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
     * @throws \Github\Exception\PullsCreateReplyForReviewCommentNotFoundException
     *
     * @return null|\Github\Model\PullRequestReviewComment
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\PullRequestReviewComment', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\PullsCreateReplyForReviewCommentNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}