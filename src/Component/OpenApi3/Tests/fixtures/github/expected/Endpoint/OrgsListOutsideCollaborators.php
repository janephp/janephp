<?php

namespace Github\Endpoint;

class OrgsListOutsideCollaborators extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    /**
    * List all users who are outside collaborators of an organization.
    *
    * @param string $org 
    * @param array $queryParameters {
    *     @var string $filter Filter the list of outside collaborators. Can be one of:  
    \* `2fa_disabled`: Outside collaborators without [two-factor authentication](https://github.com/blog/1614-two-factor-authentication) enabled.  
    \* `all`: All outside collaborators.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    */
    public function __construct(string $org, array $queryParameters = array())
    {
        $this->org = $org;
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}'), array($this->org), '/orgs/{org}/outside_collaborators');
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
        $optionsResolver->setDefined(array('filter', 'per_page', 'page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('filter' => 'all', 'per_page' => 30, 'page' => 1));
        $optionsResolver->addAllowedTypes('filter', array('string'));
        $optionsResolver->addAllowedTypes('per_page', array('int'));
        $optionsResolver->addAllowedTypes('page', array('int'));
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
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\SimpleUser[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}