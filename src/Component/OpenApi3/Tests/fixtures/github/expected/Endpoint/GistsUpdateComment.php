<?php

namespace Github\Endpoint;

class GistsUpdateComment extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $gist_id;
    protected $comment_id;
    /**
     * 
     *
     * @param string $gistId gist_id parameter
     * @param int $commentId comment_id parameter
     * @param null|\Github\Model\GistsGistIdCommentsCommentIdPatchBody $requestBody 
     */
    public function __construct(string $gistId, int $commentId, ?\Github\Model\GistsGistIdCommentsCommentIdPatchBody $requestBody = null)
    {
        $this->gist_id = $gistId;
        $this->comment_id = $commentId;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{gist_id}', '{comment_id}'), array($this->gist_id, $this->comment_id), '/gists/{gist_id}/comments/{comment_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\GistsGistIdCommentsCommentIdPatchBody) {
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
     * @throws \Github\Exception\GistsUpdateCommentNotFoundException
     *
     * @return null|\Github\Model\GistComment
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\GistComment', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\GistsUpdateCommentNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}