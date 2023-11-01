<?php

namespace Github\Endpoint;

class TeamsCheckPermissionsForProjectLegacy extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $team_id;
    protected $project_id;
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Check team permissions for a project](https://developer.github.com/v3/teams/#check-team-permissions-for-a-project) endpoint.
    
    Checks whether a team has `read`, `write`, or `admin` permissions for an organization project. The response includes projects inherited from a parent team.
    *
    * @param int $teamId 
    * @param int $projectId 
    */
    public function __construct(int $teamId, int $projectId)
    {
        $this->team_id = $teamId;
        $this->project_id = $projectId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{team_id}', '{project_id}'], [$this->team_id, $this->project_id], '/teams/{team_id}/projects/{project_id}');
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
     * @throws \Github\Exception\TeamsCheckPermissionsForProjectLegacyNotFoundException
     * @throws \Github\Exception\TeamsCheckPermissionsForProjectLegacyUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\TeamProject
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\TeamProject', 'json');
        }
        if (404 === $status) {
            throw new \Github\Exception\TeamsCheckPermissionsForProjectLegacyNotFoundException($response);
        }
        if (is_null($contentType) === false && (415 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\TeamsCheckPermissionsForProjectLegacyUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}