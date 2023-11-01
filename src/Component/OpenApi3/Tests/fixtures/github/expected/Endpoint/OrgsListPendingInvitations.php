<?php

namespace Github\Endpoint;

class OrgsListPendingInvitations extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    /**
     * The return hash contains a `role` field which refers to the Organization Invitation role and will be one of the following values: `direct_member`, `admin`, `billing_manager`, `hiring_manager`, or `reinstate`. If the invitee is not a GitHub member, the `login` field in the return hash will be `null`.
     *
     * @param string $org 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     */
    public function __construct(string $org, array $queryParameters = [])
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
        return str_replace(['{org}'], [$this->org], '/orgs/{org}/invitations');
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
     * @throws \Github\Exception\OrgsListPendingInvitationsNotFoundException
     *
     * @return null|\Github\Model\OrganizationInvitation[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\OrganizationInvitation[]', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\OrgsListPendingInvitationsNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}