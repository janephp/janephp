<?php

namespace Github\Endpoint;

class ReactionsDeleteForPullRequestComment extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $comment_id;
    protected $reaction_id;
    /**
    * **Note:** You can also specify a repository by `repository_id` using the route `DELETE /repositories/:repository_id/pulls/comments/:comment_id/reactions/:reaction_id.`
    
    Delete a reaction to a [pull request review comment](https://developer.github.com/v3/pulls/comments/).
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $commentId comment_id parameter
    * @param int $reactionId 
    */
    public function __construct(string $owner, string $repo, int $commentId, int $reactionId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->comment_id = $commentId;
        $this->reaction_id = $reactionId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}', '{comment_id}', '{reaction_id}'], [$this->owner, $this->repo, $this->comment_id, $this->reaction_id], '/repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions/{reaction_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}