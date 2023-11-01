<?php

namespace Github\Endpoint;

class ReposListBranchesForHeadCommit extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $commit_sha;
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Returns all branches where the given commit SHA is the HEAD, or latest commit for the branch.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $commitSha commit_sha+ parameter
    */
    public function __construct(string $owner, string $repo, string $commitSha)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->commit_sha = $commitSha;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}', '{commit_sha}'], [$this->owner, $this->repo, $this->commit_sha], '/repos/{owner}/{repo}/commits/{commit_sha}/branches-where-head');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ReposListBranchesForHeadCommitUnsupportedMediaTypeException
     * @throws \Github\Exception\ReposListBranchesForHeadCommitUnprocessableEntityException
     *
     * @return null|\Github\Model\BranchShort[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\BranchShort[]', 'json');
        }
        if (is_null($contentType) === false && (415 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposListBranchesForHeadCommitUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposListBranchesForHeadCommitUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}