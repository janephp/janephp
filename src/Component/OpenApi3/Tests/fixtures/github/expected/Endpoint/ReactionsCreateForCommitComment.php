<?php

namespace Github\Endpoint;

class ReactionsCreateForCommitComment extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $comment_id;
    /**
     * Create a reaction to a [commit comment](https://developer.github.com/v3/repos/comments/). A response with a `Status: 200 OK` means that you already added the reaction type to this commit comment.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $commentId comment_id parameter
     * @param null|\Github\Model\ReposOwnerRepoCommentsCommentIdReactionsPostBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $commentId, ?\Github\Model\ReposOwnerRepoCommentsCommentIdReactionsPostBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
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
        return str_replace(array('{owner}', '{repo}', '{comment_id}'), array($this->owner, $this->repo, $this->comment_id), '/repos/{owner}/{repo}/comments/{comment_id}/reactions');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoCommentsCommentIdReactionsPostBody) {
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
     * @throws \Github\Exception\ReactionsCreateForCommitCommentUnsupportedMediaTypeException
     * @throws \Github\Exception\ReactionsCreateForCommitCommentUnprocessableEntityException
     *
     * @return null|\Github\Model\Reaction
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Reaction', 'json');
        }
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Reaction', 'json');
        }
        if (415 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReactionsCreateForCommitCommentUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReactionsCreateForCommitCommentUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}