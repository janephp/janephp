<?php

namespace Github\Endpoint;

class ReposDeleteDeployKey extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $key_id;
    /**
     * Deploy keys are immutable. If you need to update a key, remove the key and create a new one instead.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $keyId key_id parameter
     */
    public function __construct(string $owner, string $repo, int $keyId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->key_id = $keyId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{key_id}'), array($this->owner, $this->repo, $this->key_id), '/repos/{owner}/{repo}/keys/{key_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Psr\Http\Message\StreamInterface
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (204 === $status) {
            return $body;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}