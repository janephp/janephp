<?php

namespace Github\Endpoint;

class TeamsDeleteInOrg extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $org;
    protected $team_slug;
    /**
    * To delete a team, the authenticated user must be an organization owner or team maintainer.
    
    If you are an organization owner, deleting a parent team will delete all of its child teams as well.
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `DELETE /organizations/{org_id}/team/{team_id}`.
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    */
    public function __construct(string $org, string $teamSlug)
    {
        $this->org = $org;
        $this->team_slug = $teamSlug;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{team_slug}'), array($this->org, $this->team_slug), '/orgs/{org}/teams/{team_slug}');
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