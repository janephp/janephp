<?php

namespace Github\Endpoint;

class ActionsListWorkflowRunsForRepo extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
    * Lists all workflow runs for a repository. You can use parameters to narrow the list of results. For more information about using parameters, see [Parameters](https://developer.github.com/v3/#parameters).
    
    Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var string $actor Returns someone's workflow runs. Use the login for the user who created the `push` associated with the check suite or workflow run.
    *     @var string $branch Returns workflow runs associated with a branch. Use the name of the branch of the `push`.
    *     @var string $event Returns workflow run triggered by the event you specify. For example, `push`, `pull_request` or `issue`. For more information, see "[Events that trigger workflows](https://help.github.com/en/actions/automating-your-workflow-with-github-actions/events-that-trigger-workflows)."
    *     @var string $status Returns workflow runs associated with the check run `status` or `conclusion` you specify. For example, a conclusion can be `success` or a status can be `completed`. For more information, see the `status` and `conclusion` options available in "[Create a check run](https://developer.github.com/v3/checks/runs/#create-a-check-run)."
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    */
    public function __construct(string $owner, string $repo, array $queryParameters = [])
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/actions/runs');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['actor', 'branch', 'event', 'status', 'per_page', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['per_page' => 30, 'page' => 1]);
        $optionsResolver->addAllowedTypes('actor', ['string']);
        $optionsResolver->addAllowedTypes('branch', ['string']);
        $optionsResolver->addAllowedTypes('event', ['string']);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\ReposOwnerRepoActionsRunsGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\ReposOwnerRepoActionsRunsGetResponse200', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}