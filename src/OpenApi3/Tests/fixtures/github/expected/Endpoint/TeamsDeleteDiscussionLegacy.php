<?php

namespace Github\Endpoint;

class TeamsDeleteDiscussionLegacy extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $team_id;
    protected $discussion_number;
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`Delete a discussion`](https://developer.github.com/v3/teams/discussions/#delete-a-discussion) endpoint.
    
    Delete a discussion from a team's page. OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    */
    public function __construct(int $teamId, int $discussionNumber)
    {
        $this->team_id = $teamId;
        $this->discussion_number = $discussionNumber;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{team_id}', '{discussion_number}'), array($this->team_id, $this->discussion_number), '/teams/{team_id}/discussions/{discussion_number}');
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