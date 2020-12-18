<?php

namespace Github\Endpoint;

class ReposCreateDeployment extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
    * Deployments offer a few configurable parameters with certain defaults.
    
    The `ref` parameter can be any named branch, tag, or SHA. At GitHub we often deploy branches and verify them
    before we merge a pull request.
    
    The `environment` parameter allows deployments to be issued to different runtime environments. Teams often have
    multiple environments for verifying their applications, such as `production`, `staging`, and `qa`. This parameter
    makes it easier to track which environments have requested deployments. The default environment is `production`.
    
    The `auto_merge` parameter is used to ensure that the requested ref is not behind the repository's default branch. If
    the ref _is_ behind the default branch for the repository, we will attempt to merge it for you. If the merge succeeds,
    the API will return a successful merge commit. If merge conflicts prevent the merge from succeeding, the API will
    return a failure response.
    
    By default, [commit statuses](https://developer.github.com/v3/repos/statuses) for every submitted context must be in a `success`
    state. The `required_contexts` parameter allows you to specify a subset of contexts that must be `success`, or to
    specify contexts that have not yet been submitted. You are not required to use commit statuses to deploy. If you do
    not require any contexts or create any commit statuses, the deployment will always succeed.
    
    The `payload` parameter is available for any extra information that a deployment system might need. It is a JSON text
    field that will be passed on when a deployment event is dispatched.
    
    The `task` parameter is used by the deployment system to allow different execution paths. In the web world this might
    be `deploy:migrations` to run schema changes on the system. In the compiled world this could be a flag to compile an
    application with debugging enabled.
    
    Users with `repo` or `repo_deployment` scopes can create a deployment for a given ref.
    
    #### Merged branch response
    You will see this response when GitHub automatically merges the base branch into the topic branch instead of creating
    a deployment. This auto-merge happens when:
    *   Auto-merge option is enabled in the repository
    *   Topic branch does not include the latest changes on the base branch, which is `master` in the response example
    *   There are no merge conflicts
    
    If there are no new commits in the base branch, a new request to create a deployment should give a successful
    response.
    
    #### Merge conflict response
    This error happens when the `auto_merge` option is enabled and when the default branch (in this case `master`), can't
    be merged into the branch that's being deployed (in this case `topic-branch`), due to merge conflicts.
    
    #### Failed commit status checks
    This error happens when the `required_contexts` parameter indicates that one or more contexts need to have a `success`
    status for the commit to be deployed, but one or more of the required contexts do not have a state of `success`.
    *
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\ReposOwnerRepoDeploymentsPostBody $requestBody 
    */
    public function __construct(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoDeploymentsPostBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/deployments');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoDeploymentsPostBody) {
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
     * @throws \Github\Exception\ReposCreateDeploymentConflictException
     * @throws \Github\Exception\ReposCreateDeploymentUnprocessableEntityException
     *
     * @return null|\Github\Model\Deployment|\Github\Model\ReposOwnerRepoDeploymentsPostResponse202
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Deployment', 'json');
        }
        if (is_null($contentType) === false && (202 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\ReposOwnerRepoDeploymentsPostResponse202', 'json');
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposCreateDeploymentConflictException($serializer->deserialize($body, 'Github\\Model\\ReposOwnerRepoDeploymentsPostResponse409', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposCreateDeploymentUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}