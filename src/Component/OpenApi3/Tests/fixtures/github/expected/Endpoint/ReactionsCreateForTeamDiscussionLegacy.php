<?php

namespace Github\Endpoint;

class ReactionsCreateForTeamDiscussionLegacy extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $team_id;
    protected $discussion_number;
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`Create reaction for a team discussion`](https://developer.github.com/v3/reactions/#create-reaction-for-a-team-discussion) endpoint.
    
    Create a reaction to a [team discussion](https://developer.github.com/v3/teams/discussions/). OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/). A response with a `Status: 200 OK` means that you already added the reaction type to this team discussion.
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberReactionsPostBody $requestBody 
    */
    public function __construct(int $teamId, int $discussionNumber, \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberReactionsPostBody $requestBody)
    {
        $this->team_id = $teamId;
        $this->discussion_number = $discussionNumber;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{team_id}', '{discussion_number}'), array($this->team_id, $this->discussion_number), '/teams/{team_id}/discussions/{discussion_number}/reactions');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberReactionsPostBody) {
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
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Reaction', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}