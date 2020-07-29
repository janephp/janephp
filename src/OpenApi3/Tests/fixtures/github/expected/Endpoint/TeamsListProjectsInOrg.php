<?php

namespace Github\Endpoint;

class TeamsListProjectsInOrg extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $org;
    protected $team_slug;
    /**
     * Lists the organization projects for a team.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/projects`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     */
    public function __construct(string $org, string $teamSlug, array $queryParameters = array())
    {
        $this->org = $org;
        $this->team_slug = $teamSlug;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{team_slug}'), array($this->org, $this->team_slug), '/orgs/{org}/teams/{team_slug}/projects');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('per_page', 'page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('per_page' => 30, 'page' => 1));
        $optionsResolver->setAllowedTypes('per_page', array('int'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\TeamProject[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\TeamProject[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}