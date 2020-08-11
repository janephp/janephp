<?php

namespace Github\Endpoint;

class ReposDeletePagesSite extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     */
    public function __construct(string $owner, string $repo)
    {
        $this->owner = $owner;
        $this->repo = $repo;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/pages');
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
     * @throws \Github\Exception\ReposDeletePagesSiteUnprocessableEntityException
     * @throws \Github\Exception\ReposDeletePagesSiteUnsupportedMediaTypeException
     * @throws \Github\Exception\ReposDeletePagesSiteNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposDeletePagesSiteUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
        if (415 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposDeletePagesSiteUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposDeletePagesSiteNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}