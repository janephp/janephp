<?php

namespace Github\Endpoint;

class ReposGetPagesBuild extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $build_id;
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $buildId build_id parameter
     */
    public function __construct(string $owner, string $repo, int $buildId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->build_id = $buildId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{build_id}'), array($this->owner, $this->repo, $this->build_id), '/repos/{owner}/{repo}/pages/builds/{build_id}');
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
     *
     * @return null|\Github\Model\PageBuild
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\PageBuild', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}