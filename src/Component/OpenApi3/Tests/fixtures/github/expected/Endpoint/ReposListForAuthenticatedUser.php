<?php

namespace Github\Endpoint;

class ReposListForAuthenticatedUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    /**
    * Lists repositories that the authenticated user has explicit permission (`:read`, `:write`, or `:admin`) to access.
    
    The authenticated user has explicit permission to access repositories they own, repositories where they are a collaborator, and repositories that they can access through an organization membership.
    *
    * @param array $queryParameters {
    *     @var string $visibility Can be one of `all`, `public`, or `private`.
    *     @var string $affiliation Comma-separated list of values. Can include:  
    \* `owner`: Repositories that are owned by the authenticated user.  
    \* `collaborator`: Repositories that the user has been added to as a collaborator.  
    \* `organization_member`: Repositories that the user has access to through being a member of an organization. This includes every repository on every team that the user is on.
    *     @var string $type Can be one of `all`, `owner`, `public`, `private`, `member`. Default: `all`  
     
    Will cause a `422` error if used in the same request as **visibility** or **affiliation**. Will cause a `422` error if used in the same request as **visibility** or **affiliation**.
    *     @var string $sort Can be one of `created`, `updated`, `pushed`, `full_name`.
    *     @var string $direction Can be one of `asc` or `desc`. Default: `asc` when using `full_name`, otherwise `desc`
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var string $before Only show notifications updated before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    * }
    */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/user/repos';
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
        $optionsResolver->setDefined(array('visibility', 'affiliation', 'type', 'sort', 'direction', 'per_page', 'page', 'since', 'before'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('visibility' => 'all', 'affiliation' => 'owner,collaborator,organization_member', 'type' => 'all', 'sort' => 'full_name', 'per_page' => 30, 'page' => 1));
        $optionsResolver->addAllowedTypes('visibility', array('string'));
        $optionsResolver->addAllowedTypes('affiliation', array('string'));
        $optionsResolver->addAllowedTypes('type', array('string'));
        $optionsResolver->addAllowedTypes('sort', array('string'));
        $optionsResolver->addAllowedTypes('direction', array('string'));
        $optionsResolver->addAllowedTypes('per_page', array('int'));
        $optionsResolver->addAllowedTypes('page', array('int'));
        $optionsResolver->addAllowedTypes('since', array('string'));
        $optionsResolver->addAllowedTypes('before', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ReposListForAuthenticatedUserIAmATeapotException
     * @throws \Github\Exception\ReposListForAuthenticatedUserUnprocessableEntityException
     * @throws \Github\Exception\ReposListForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\ReposListForAuthenticatedUserUnauthorizedException
     *
     * @return null|\Github\Model\Repository[]|\Psr\Http\Message\StreamInterface
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize((string) $body, 'Github\\Model\\Repository[]', 'json');
        }
        if (418 === $status) {
            throw new \Github\Exception\ReposListForAuthenticatedUserIAmATeapotException($response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposListForAuthenticatedUserUnprocessableEntityException($serializer->deserialize((string) $body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
        if (304 === $status) {
            return $body;
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposListForAuthenticatedUserForbiddenException($serializer->deserialize((string) $body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposListForAuthenticatedUserUnauthorizedException($serializer->deserialize((string) $body, 'Github\\Model\\BasicError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}