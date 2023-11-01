<?php

namespace Github\Endpoint;

class PullsGetReviewComment extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $comment_id;
    /**
    * **Note:** Multi-line comments on pull requests are currently in public beta and subject to change.
    
    Provides details for a review comment.
    
    **Multi-line comment summary**
    
    **Note:** New parameters and response fields are available for developers to preview. During the preview period, these response fields may change without advance notice. Please see the [blog post](https://developer.github.com/changes/2019-10-03-multi-line-comments) for full details.
    
    Use the `comfort-fade` preview header and the `line` parameter to show multi-line comment-supported fields in the response.
    
    If you use the `comfort-fade` preview header, your response will show:
    
    *   For multi-line comments, values for `start_line`, `original_start_line`, `start_side`, `line`, `original_line`, and `side`.
    *   For single-line comments, values for `line`, `original_line`, and `side` and a `null` value for `start_line`, `original_start_line`, and `start_side`.
    
    If you don't use the `comfort-fade` preview header, multi-line and single-line comments will appear the same way in the response with a single `position` attribute. Your response will show:
    
    *   For multi-line comments, the last line of the comment range for the `position` attribute.
    *   For single-line comments, the diff-positioned way of referencing comments for the `position` attribute. For more information, see `position` in the [input parameters](https://developer.github.com/v3/pulls/comments/#parameters-2) table.
    
    The `reactions` key will have the following payload where `url` can be used to construct the API location for [listing and creating](https://developer.github.com/v3/reactions) reactions.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $commentId comment_id parameter
    */
    public function __construct(string $owner, string $repo, int $commentId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->comment_id = $commentId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}', '{comment_id}'], [$this->owner, $this->repo, $this->comment_id], '/repos/{owner}/{repo}/pulls/comments/{comment_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\PullsGetReviewCommentNotFoundException
     *
     * @return null|\Github\Model\PullRequestReviewComment
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\PullRequestReviewComment', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\PullsGetReviewCommentNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}