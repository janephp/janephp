<?php

namespace Github\Endpoint;

class AppsListInstallationsForAuthenticatedUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    /**
    * Lists installations of your GitHub App that the authenticated user has explicit permission (`:read`, `:write`, or `:admin`) to access.
    
    You must use a [user-to-server OAuth access token](https://developer.github.com/apps/building-github-apps/identifying-and-authorizing-users-for-github-apps/#identifying-users-on-your-site), created for a user who has authorized your GitHub App, to access this endpoint.
    
    The authenticated user has explicit permission to access repositories they own, repositories where they are a collaborator, and repositories that they can access through an organization membership.
    
    You can find the permissions for the installation under the `permissions` key.
    *
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    */
    public function __construct(array $queryParameters = [])
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
        return '/user/installations';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['per_page', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['per_page' => 30, 'page' => 1]);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\AppsListInstallationsForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\AppsListInstallationsForAuthenticatedUserUnauthorizedException
     * @throws \Github\Exception\AppsListInstallationsForAuthenticatedUserUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\UserInstallationsGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\UserInstallationsGetResponse200', 'json');
        }
        if (304 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\AppsListInstallationsForAuthenticatedUserForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\AppsListInstallationsForAuthenticatedUserUnauthorizedException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (415 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\AppsListInstallationsForAuthenticatedUserUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}