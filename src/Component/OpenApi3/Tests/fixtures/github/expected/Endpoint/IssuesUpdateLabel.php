<?php

namespace Github\Endpoint;

class IssuesUpdateLabel extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $name;
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $name name parameter
     * @param \Github\Model\ReposOwnerRepoLabelsNamePatchBody $requestBody 
     */
    public function __construct(string $owner, string $repo, string $name, \Github\Model\ReposOwnerRepoLabelsNamePatchBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->name = $name;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{name}'), array($this->owner, $this->repo, $this->name), '/repos/{owner}/{repo}/labels/{name}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoLabelsNamePatchBody) {
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
     *
     * @return null|\Github\Model\Label
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Label', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}