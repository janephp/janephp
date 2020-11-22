<?php

namespace Github\Endpoint;

class ActionsCreateWorkflowDispatch extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $workflow_id;
    /**
    * You can use this endpoint to manually trigger a GitHub Actions workflow run. You can also replace `{workflow_id}` with the workflow file name. For example, you could use `main.yml`.
    
    You must configure your GitHub Actions workflow to run when the [`workflow_dispatch` webhook](/developers/webhooks-and-events/webhook-events-and-payloads#workflow_dispatch) event occurs. The `inputs` are configured in the workflow file. For more information about how to configure the `workflow_dispatch` event in the workflow file, see "[Events that trigger workflows](/actions/reference/events-that-trigger-workflows#workflow_dispatch)."
    
    You must authenticate using an access token with the `repo` scope to use this endpoint. GitHub Apps must have the `actions:write` permission to use this endpoint. For more information, see "[Creating a personal access token for the command line](https://help.github.com/articles/creating-a-personal-access-token-for-the-command-line)."
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $workflowId 
    * @param \Github\Model\ReposOwnerRepoActionsWorkflowsWorkflowIdDispatchesPostBody $requestBody 
    */
    public function __construct(string $owner, string $repo, int $workflowId, \Github\Model\ReposOwnerRepoActionsWorkflowsWorkflowIdDispatchesPostBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->workflow_id = $workflowId;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{workflow_id}'), array($this->owner, $this->repo, $this->workflow_id), '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoActionsWorkflowsWorkflowIdDispatchesPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
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