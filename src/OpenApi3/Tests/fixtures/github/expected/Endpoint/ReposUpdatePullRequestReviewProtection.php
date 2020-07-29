<?php

namespace Github\Endpoint;

class ReposUpdatePullRequestReviewProtection extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    protected $branch;
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Updating pull request review enforcement requires admin or owner permissions to the repository and branch protection to be enabled.
    
    **Note**: Passing new arrays of `users` and `teams` replaces their previous values.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody $requestBody 
    */
    public function __construct(string $owner, string $repo, string $branch, \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->branch = $branch;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{branch}'), array($this->owner, $this->repo, $this->branch), '/repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody) {
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
     * @throws \Github\Exception\ReposUpdatePullRequestReviewProtectionUnprocessableEntityException
     *
     * @return null|\Github\Model\ProtectedBranchPullRequestReview
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\ProtectedBranchPullRequestReview', 'json');
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposUpdatePullRequestReviewProtectionUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}