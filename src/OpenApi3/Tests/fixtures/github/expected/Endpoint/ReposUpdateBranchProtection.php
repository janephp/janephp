<?php

namespace Github\Endpoint;

class ReposUpdateBranchProtection extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    protected $branch;
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Protecting a branch requires admin or owner permissions to the repository.
    
    **Note**: Passing new arrays of `users` and `teams` replaces their previous values.
    
    **Note**: The list of users, apps, and teams in total is limited to 100 items.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBody $requestBody 
    */
    public function __construct(string $owner, string $repo, string $branch, \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->branch = $branch;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{branch}'), array($this->owner, $this->repo, $this->branch), '/repos/{owner}/{repo}/branches/{branch}/protection');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBody) {
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
     * @throws \Github\Exception\ReposUpdateBranchProtectionForbiddenException
     * @throws \Github\Exception\ReposUpdateBranchProtectionUnsupportedMediaTypeException
     * @throws \Github\Exception\ReposUpdateBranchProtectionUnprocessableEntityException
     * @throws \Github\Exception\ReposUpdateBranchProtectionNotFoundException
     *
     * @return null|\Github\Model\ProtectedBranch
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\ProtectedBranch', 'json');
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposUpdateBranchProtectionForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (415 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposUpdateBranchProtectionUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposUpdateBranchProtectionUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationErrorSimple', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposUpdateBranchProtectionNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}