<?php

namespace Github\Endpoint;

class ReposDeleteReleaseAsset extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $asset_id;
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $assetId asset_id parameter
     */
    public function __construct(string $owner, string $repo, int $assetId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->asset_id = $assetId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{asset_id}'), array($this->owner, $this->repo, $this->asset_id), '/repos/{owner}/{repo}/releases/assets/{asset_id}');
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