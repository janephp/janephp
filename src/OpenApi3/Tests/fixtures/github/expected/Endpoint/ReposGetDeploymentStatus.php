<?php

namespace Github\Endpoint;

class ReposGetDeploymentStatus extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $deployment_id;
    protected $status_id;
    /**
     * Users with pull access can view a deployment status for a deployment:
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $deploymentId deployment_id parameter
     * @param int $statusId status_id parameter
     */
    public function __construct(string $owner, string $repo, int $deploymentId, int $statusId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->deployment_id = $deploymentId;
        $this->status_id = $statusId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{deployment_id}', '{status_id}'), array($this->owner, $this->repo, $this->deployment_id, $this->status_id), '/repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}');
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
     * @throws \Github\Exception\ReposGetDeploymentStatusNotFoundException
     * @throws \Github\Exception\ReposGetDeploymentStatusUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\DeploymentStatus
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\DeploymentStatus', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposGetDeploymentStatusNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (is_null($contentType) === false && (415 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposGetDeploymentStatusUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}