<?php

namespace Github\Endpoint;

class TeamsUpdateLegacy extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $team_id;
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Update a team](https://developer.github.com/v3/teams/#update-a-team) endpoint.
    
    To edit a team, the authenticated user must either be an organization owner or a team maintainer.
    
    **Note:** With nested teams, the `privacy` for parent teams cannot be `secret`.
    *
    * @param int $teamId 
    * @param \Github\Model\TeamsTeamIdPatchBody $requestBody 
    */
    public function __construct(int $teamId, \Github\Model\TeamsTeamIdPatchBody $requestBody)
    {
        $this->team_id = $teamId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{team_id}'), array($this->team_id), '/teams/{team_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\TeamsTeamIdPatchBody) {
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
     * @throws \Github\Exception\TeamsUpdateLegacyNotFoundException
     * @throws \Github\Exception\TeamsUpdateLegacyUnprocessableEntityException
     * @throws \Github\Exception\TeamsUpdateLegacyForbiddenException
     *
     * @return null|\Github\Model\TeamFull
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\TeamFull', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\TeamsUpdateLegacyNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\TeamsUpdateLegacyUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\TeamsUpdateLegacyForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}