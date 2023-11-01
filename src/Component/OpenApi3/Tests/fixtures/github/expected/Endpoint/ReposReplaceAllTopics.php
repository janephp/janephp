<?php

namespace Github\Endpoint;

class ReposReplaceAllTopics extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoTopicsPutBody $requestBody 
     */
    public function __construct(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoTopicsPutBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/topics');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoTopicsPutBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ReposReplaceAllTopicsUnsupportedMediaTypeException
     * @throws \Github\Exception\ReposReplaceAllTopicsNotFoundException
     * @throws \Github\Exception\ReposReplaceAllTopicsUnprocessableEntityException
     *
     * @return null|\Github\Model\Topic
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Topic', 'json');
        }
        if (is_null($contentType) === false && (415 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposReplaceAllTopicsUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposReplaceAllTopicsNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposReplaceAllTopicsUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationErrorSimple', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}