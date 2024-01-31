<?php

namespace Github\Endpoint;

class IssuesGet extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $issue_number;
    /**
    * The API returns a [`301 Moved Permanently` status](https://developer.github.com/v3/#http-redirects) if the issue was
    [transferred](https://help.github.com/articles/transferring-an-issue-to-another-repository/) to another repository. If
    the issue was transferred to or deleted from a repository where the authenticated user lacks read access, the API
    returns a `404 Not Found` status. If the issue was deleted from a repository where the authenticated user has read
    access, the API returns a `410 Gone` status. To receive webhook events for transferred and deleted issues, subscribe
    to the [`issues`](https://developer.github.com/webhooks/event-payloads/#issues) webhook.
    
    **Note**: GitHub's REST API v3 considers every pull request an issue, but not every issue is a pull request. For this
    reason, "Issues" endpoints may return both issues and pull requests in the response. You can identify pull requests by
    the `pull_request` key. Be aware that the `id` of a pull request returned from "Issues" endpoints will be an _issue id_. To find out the pull
    request id, use the "[List pull requests](https://developer.github.com/v3/pulls/#list-pull-requests)" endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $issueNumber issue_number parameter
    */
    public function __construct(string $owner, string $repo, int $issueNumber)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issue_number = $issueNumber;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}', '{issue_number}'], [$this->owner, $this->repo, $this->issue_number], '/repos/{owner}/{repo}/issues/{issue_number}');
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
     * @throws \Github\Exception\IssuesGetNotFoundException
     * @throws \Github\Exception\IssuesGetGoneException
     *
     * @return null|\Github\Model\Issue
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Issue', 'json');
        }
        if (301 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\IssuesGetNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (410 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\IssuesGetGoneException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (304 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}