<?php

namespace Github\Endpoint;

class ReposSetAppAccessRestrictions extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $branch;
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Replaces the list of apps that have push access to this branch. This removes all apps that previously had push access and grants push access to the new list of apps. Only installed GitHub Apps with `write` access to the `contents` permission can be added as authorized actors on a protected branch.
    
    | Type    | Description                                                                                                                                                |
    | ------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | `array` | The GitHub Apps that have push access to this branch. Use the app's `slug`. **Note**: The list of users, apps, and teams in total is limited to 100 items. |
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param null|array[] $requestBody 
    */
    public function __construct(string $owner, string $repo, string $branch, ?array $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->branch = $branch;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}', '{branch}'], [$this->owner, $this->repo, $this->branch], '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_array($this->body) and isset($this->body[0]) and is_array($this->body[0])) {
            return [['Content-Type' => ['application/json']], json_encode($this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ReposSetAppAccessRestrictionsUnprocessableEntityException
     *
     * @return null|\Github\Model\Integration[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Integration[]', 'json');
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposSetAppAccessRestrictionsUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}