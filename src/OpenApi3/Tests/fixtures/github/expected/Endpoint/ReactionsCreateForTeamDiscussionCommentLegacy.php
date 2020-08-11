<?php

namespace Github\Endpoint;

class ReactionsCreateForTeamDiscussionCommentLegacy extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $team_id;
    protected $discussion_number;
    protected $comment_number;
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`Create reaction for a team discussion comment`](https://developer.github.com/v3/reactions/#create-reaction-for-a-team-discussion-comment) endpoint.
    
    Create a reaction to a [team discussion comment](https://developer.github.com/v3/teams/discussion_comments/). OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/). A response with a `Status: 200 OK` means that you already added the reaction type to this team discussion comment.
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param int $commentNumber 
    * @param \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody $requestBody 
    */
    public function __construct(int $teamId, int $discussionNumber, int $commentNumber, \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody $requestBody)
    {
        $this->team_id = $teamId;
        $this->discussion_number = $discussionNumber;
        $this->comment_number = $commentNumber;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{team_id}', '{discussion_number}', '{comment_number}'), array($this->team_id, $this->discussion_number, $this->comment_number), '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody) {
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
     * @return null|\Github\Model\Reaction
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Reaction', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}