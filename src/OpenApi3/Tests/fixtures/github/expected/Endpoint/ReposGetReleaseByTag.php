<?php

namespace Github\Endpoint;

class ReposGetReleaseByTag extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $tag;
    /**
     * Get a published release with the specified tag.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $tag tag+ parameter
     */
    public function __construct(string $owner, string $repo, string $tag)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->tag = $tag;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{tag}'), array($this->owner, $this->repo, $this->tag), '/repos/{owner}/{repo}/releases/tags/{tag}');
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
     * @throws \Github\Exception\ReposGetReleaseByTagNotFoundException
     *
     * @return null|\Github\Model\Release
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Release', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposGetReleaseByTagNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}