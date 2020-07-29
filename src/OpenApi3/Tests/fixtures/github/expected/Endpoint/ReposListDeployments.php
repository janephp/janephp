<?php

namespace Github\Endpoint;

class ReposListDeployments extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    /**
     * Simple filtering of deployments is available via query parameters:
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var string $sha The SHA recorded at creation time.
     *     @var string $ref The name of the ref. This can be a branch, tag, or SHA.
     *     @var string $task The name of the task for the deployment (e.g., `deploy` or `deploy:migrations`).
     *     @var string $environment The name of the environment that was deployed to (e.g., `staging` or `production`).
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     */
    public function __construct(string $owner, string $repo, array $queryParameters = array())
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/deployments');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('sha', 'ref', 'task', 'environment', 'per_page', 'page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('sha' => 'none', 'ref' => 'none', 'task' => 'none', 'environment' => 'none', 'per_page' => 30, 'page' => 1));
        $optionsResolver->setAllowedTypes('sha', array('string'));
        $optionsResolver->setAllowedTypes('ref', array('string'));
        $optionsResolver->setAllowedTypes('task', array('string'));
        $optionsResolver->setAllowedTypes('environment', array('string'));
        $optionsResolver->setAllowedTypes('per_page', array('int'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\Deployment[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Deployment[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}