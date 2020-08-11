<?php

namespace Github\Endpoint;

class MigrationsStartImport extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
     * Start a source import to a GitHub repository using GitHub Importer.
     *
     * @param string $owner 
     * @param string $repo 
     * @param \Github\Model\ReposOwnerRepoImportPutBody $requestBody 
     */
    public function __construct(string $owner, string $repo, \Github\Model\ReposOwnerRepoImportPutBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/import');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoImportPutBody) {
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
     * @throws \Github\Exception\MigrationsStartImportUnprocessableEntityException
     * @throws \Github\Exception\MigrationsStartImportNotFoundException
     *
     * @return null|\Github\Model\Import
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Import', 'json');
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\MigrationsStartImportUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\MigrationsStartImportNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}