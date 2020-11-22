<?php

namespace Github\Endpoint;

class GitGetBlob extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $file_sha;
    /**
    * The `content` in the response will always be Base64 encoded.
    
    _Note_: This API supports blobs up to 100 megabytes in size.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $fileSha file_sha parameter
    */
    public function __construct(string $owner, string $repo, string $fileSha)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->file_sha = $fileSha;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{file_sha}'), array($this->owner, $this->repo, $this->file_sha), '/repos/{owner}/{repo}/git/blobs/{file_sha}');
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
     * @throws \Github\Exception\GitGetBlobNotFoundException
     * @throws \Github\Exception\GitGetBlobUnprocessableEntityException
     * @throws \Github\Exception\GitGetBlobForbiddenException
     *
     * @return null|\Github\Model\Blob
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Blob', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\GitGetBlobNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\GitGetBlobUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\GitGetBlobForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}