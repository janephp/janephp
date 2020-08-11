<?php

namespace Github\Endpoint;

class ReposGet extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
    * When you pass the `scarlet-witch-preview` media type, requests to get a repository will also return the repository's code of conduct if it can be detected from the repository's code of conduct file.
    
    The `parent` and `source` objects are present when the repository is a fork. `parent` is the repository this repository was forked from, `source` is the ultimate source for the network.
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
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}');
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
     * @throws \Github\Exception\ReposGetForbiddenException
     * @throws \Github\Exception\ReposGetNotFoundException
     *
     * @return null|\Github\Model\FullRepository
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\FullRepository', 'json');
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposGetForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposGetNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (301 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}