<?php

namespace Github\Endpoint;

class ReposCreateUsingTemplate extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $template_owner;
    protected $template_repo;
    /**
    * Creates a new repository using a repository template. Use the `template_owner` and `template_repo` route parameters to specify the repository to use as the template. The authenticated user must own or be a member of an organization that owns the repository. To check if a repository is available to use as a template, get the repository's information using the [Get a repository](https://developer.github.com/v3/repos/#get-a-repository) endpoint and check that the `is_template` key is `true`.
    
    **OAuth scope requirements**
    
    When using [OAuth](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/), authorizations must include:
    
    *   `public_repo` scope or `repo` scope to create a public repository
    *   `repo` scope to create a private repository
    *
    * @param string $templateOwner template_owner parameter
    * @param string $templateRepo template_repo parameter
    * @param \Github\Model\ReposTemplateOwnerTemplateRepoGeneratePostBody $requestBody 
    */
    public function __construct(string $templateOwner, string $templateRepo, \Github\Model\ReposTemplateOwnerTemplateRepoGeneratePostBody $requestBody)
    {
        $this->template_owner = $templateOwner;
        $this->template_repo = $templateRepo;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{template_owner}', '{template_repo}'), array($this->template_owner, $this->template_repo), '/repos/{template_owner}/{template_repo}/generate');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposTemplateOwnerTemplateRepoGeneratePostBody) {
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
     * @return null|\Github\Model\Repository
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Repository', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}