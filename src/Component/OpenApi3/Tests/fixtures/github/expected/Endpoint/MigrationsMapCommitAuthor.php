<?php

namespace Github\Endpoint;

class MigrationsMapCommitAuthor extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $author_id;
    /**
     * Update an author's identity for the import. Your application can continue updating authors any time before you push new commits to the repository.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $authorId author_id parameter
     * @param null|\Github\Model\ReposOwnerRepoImportAuthorsAuthorIdPatchBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $authorId, ?\Github\Model\ReposOwnerRepoImportAuthorsAuthorIdPatchBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->author_id = $authorId;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}', '{author_id}'], [$this->owner, $this->repo, $this->author_id], '/repos/{owner}/{repo}/import/authors/{author_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoImportAuthorsAuthorIdPatchBody) {
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
     * @throws \Github\Exception\MigrationsMapCommitAuthorUnprocessableEntityException
     * @throws \Github\Exception\MigrationsMapCommitAuthorNotFoundException
     *
     * @return null|\Github\Model\PorterAuthor
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\PorterAuthor', 'json');
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\MigrationsMapCommitAuthorUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\MigrationsMapCommitAuthorNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}