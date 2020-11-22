<?php

namespace Github\Endpoint;

class TeamsListMembersInOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $team_slug;
    /**
    * Team members will include the members of child teams.
    
    To list members in a team, the team must be visible to the authenticated user.
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param array $queryParameters {
    *     @var string $role Filters members returned by their role in the team. Can be one of:  
    \* `member` - normal members of the team.  
    \* `maintainer` - team maintainers.  
    \* `all` - all members of the team.
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
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{team_slug}'), array($this->org, $this->team_slug), '/orgs/{org}/teams/{team_slug}/members');
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
        $optionsResolver->setDefined(array('role', 'per_page', 'page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('role' => 'all', 'per_page' => 30, 'page' => 1));
        $optionsResolver->setAllowedTypes('role', array('string'));
        $optionsResolver->setAllowedTypes('per_page', array('int'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\SimpleUser[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\SimpleUser[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}