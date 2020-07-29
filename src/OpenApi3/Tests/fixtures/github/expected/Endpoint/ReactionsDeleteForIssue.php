<?php

namespace Github\Endpoint;

class ReactionsDeleteForIssue extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    protected $issue_number;
    protected $reaction_id;
    /**
    * **Note:** You can also specify a repository by `repository_id` using the route `DELETE /repositories/:repository_id/issues/:issue_number/reactions/:reaction_id`.
    
    Delete a reaction to an [issue](https://developer.github.com/v3/issues/).
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $issueNumber issue_number parameter
    * @param int $reactionId 
    */
    public function __construct(string $owner, string $repo, int $issueNumber, int $reactionId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issue_number = $issueNumber;
        $this->reaction_id = $reactionId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{issue_number}', '{reaction_id}'), array($this->owner, $this->repo, $this->issue_number, $this->reaction_id), '/repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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