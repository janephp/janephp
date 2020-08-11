<?php

namespace Github\Endpoint;

class ReposListForUser extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $username;
    /**
     * Lists public repositories for the specified user.
     *
     * @param string $username 
     * @param array $queryParameters {
     *     @var string $type Can be one of `all`, `owner`, `member`.
     *     @var string $sort Can be one of `created`, `updated`, `pushed`, `full_name`.
     *     @var string $direction Can be one of `asc` or `desc`. Default: `asc` when using `full_name`, otherwise `desc`
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     */
    public function __construct(string $username, array $queryParameters = array())
    {
        $this->username = $username;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{username}'), array($this->username), '/users/{username}/repos');
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
        $optionsResolver->setDefined(array('type', 'sort', 'direction', 'per_page', 'page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('type' => 'owner', 'sort' => 'full_name', 'per_page' => 30, 'page' => 1));
        $optionsResolver->setAllowedTypes('type', array('string'));
        $optionsResolver->setAllowedTypes('sort', array('string'));
        $optionsResolver->setAllowedTypes('direction', array('string'));
        $optionsResolver->setAllowedTypes('per_page', array('int'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\MinimalRepository[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\MinimalRepository[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}