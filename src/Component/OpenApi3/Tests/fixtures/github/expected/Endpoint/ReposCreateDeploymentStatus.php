<?php

namespace Github\Endpoint;

class ReposCreateDeploymentStatus extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $deployment_id;
    /**
    * Users with `push` access can create deployment statuses for a given deployment.
    
    GitHub Apps require `read & write` access to "Deployments" and `read-only` access to "Repo contents" (for private repos). OAuth Apps require the `repo_deployment` scope.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $deploymentId deployment_id parameter
    * @param null|\Github\Model\ReposOwnerRepoDeploymentsDeploymentIdStatusesPostBody $requestBody 
    */
    public function __construct(string $owner, string $repo, int $deploymentId, ?\Github\Model\ReposOwnerRepoDeploymentsDeploymentIdStatusesPostBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->deployment_id = $deploymentId;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{deployment_id}'), array($this->owner, $this->repo, $this->deployment_id), '/repos/{owner}/{repo}/deployments/{deployment_id}/statuses');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoDeploymentsDeploymentIdStatusesPostBody) {
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
     * @throws \Github\Exception\ReposCreateDeploymentStatusUnprocessableEntityException
     *
     * @return null|\Github\Model\DeploymentStatus
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize((string) $body, 'Github\\Model\\DeploymentStatus', 'json');
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposCreateDeploymentStatusUnprocessableEntityException($serializer->deserialize((string) $body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}