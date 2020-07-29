<?php

namespace Github\Endpoint;

class TeamsGetMemberLegacy extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $team_id;
    protected $username;
    /**
    * The "Get team member" endpoint (described below) is deprecated.
    
    We recommend using the [Get team membership for a user](https://developer.github.com/v3/teams/members/#get-team-membership-for-a-user) endpoint instead. It allows you to get both active and pending memberships.
    
    To list members in a team, the team must be visible to the authenticated user.
    *
    * @param int $teamId 
    * @param string $username 
    */
    public function __construct(int $teamId, string $username)
    {
        $this->team_id = $teamId;
        $this->username = $username;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{team_id}', '{username}'), array($this->team_id, $this->username), '/teams/{team_id}/members/{username}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\TeamsGetMemberLegacyNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Github\Exception\TeamsGetMemberLegacyNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}