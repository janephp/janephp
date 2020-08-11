<?php

namespace Github\Endpoint;

class TeamsGetByName extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $org;
    protected $team_slug;
    /**
     * Gets a team using the team's `slug`. GitHub generates the `slug` from the team `name`.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}`.
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
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{team_slug}'), array($this->org, $this->team_slug), '/orgs/{org}/teams/{team_slug}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\TeamsGetByNameNotFoundException
     *
     * @return null|\Github\Model\TeamFull
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\TeamFull', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\TeamsGetByNameNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}