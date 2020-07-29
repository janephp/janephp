<?php

namespace Github\Endpoint;

class ReposRemoveCollaborator extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    protected $username;
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $username 
     */
    public function __construct(string $owner, string $repo, string $username)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->username = $username;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{username}'), array($this->owner, $this->repo, $this->username), '/repos/{owner}/{repo}/collaborators/{username}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}