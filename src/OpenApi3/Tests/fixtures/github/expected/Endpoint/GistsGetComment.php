<?php

namespace Github\Endpoint;

class GistsGetComment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $gist_id;
    protected $comment_id;
    /**
     * 
     *
     * @param string $gistId gist_id parameter
     * @param int $commentId comment_id parameter
     */
    public function __construct(string $gistId, int $commentId)
    {
        $this->gist_id = $gistId;
        $this->comment_id = $commentId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{gist_id}', '{comment_id}'), array($this->gist_id, $this->comment_id), '/gists/{gist_id}/comments/{comment_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\GistsGetCommentNotFoundException
     * @throws \Github\Exception\GistsGetCommentForbiddenException
     *
     * @return null|\Github\Model\GistComment
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\GistComment', 'json');
        }
        if (304 === $status) {
            return null;
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\GistsGetCommentNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\GistsGetCommentForbiddenException($serializer->deserialize($body, 'Github\\Model\\ResponseForbiddenGist', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}