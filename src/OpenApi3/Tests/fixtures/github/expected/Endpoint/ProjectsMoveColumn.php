<?php

namespace Github\Endpoint;

class ProjectsMoveColumn extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $column_id;
    /**
     * 
     *
     * @param int $columnId column_id parameter
     * @param \Github\Model\ProjectsColumnsColumnIdMovesPostBody $requestBody 
     */
    public function __construct(int $columnId, \Github\Model\ProjectsColumnsColumnIdMovesPostBody $requestBody)
    {
        $this->column_id = $columnId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{column_id}'), array($this->column_id), '/projects/columns/{column_id}/moves');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ProjectsColumnsColumnIdMovesPostBody) {
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
     * @throws \Github\Exception\ProjectsMoveColumnForbiddenException
     * @throws \Github\Exception\ProjectsMoveColumnUnprocessableEntityException
     * @throws \Github\Exception\ProjectsMoveColumnUnauthorizedException
     *
     * @return null|\Github\Model\ProjectsColumnsColumnIdMovesPostResponse201
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\ProjectsColumnsColumnIdMovesPostResponse201', 'json');
        }
        if (304 === $status) {
            return null;
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ProjectsMoveColumnForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ProjectsMoveColumnUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationErrorSimple', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ProjectsMoveColumnUnauthorizedException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}