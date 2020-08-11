<?php

namespace Github\Endpoint;

class ReposUpdateReleaseAsset extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $asset_id;
    /**
     * Users with push access to the repository can edit a release asset.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $assetId asset_id parameter
     * @param \Github\Model\ReposOwnerRepoReleasesAssetsAssetIdPatchBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $assetId, \Github\Model\ReposOwnerRepoReleasesAssetsAssetIdPatchBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->asset_id = $assetId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{asset_id}'), array($this->owner, $this->repo, $this->asset_id), '/repos/{owner}/{repo}/releases/assets/{asset_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoReleasesAssetsAssetIdPatchBody) {
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
     * @return null|\Github\Model\ReleaseAsset
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\ReleaseAsset', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}