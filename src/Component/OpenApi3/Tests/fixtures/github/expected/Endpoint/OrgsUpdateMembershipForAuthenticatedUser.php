<?php

namespace Github\Endpoint;

class OrgsUpdateMembershipForAuthenticatedUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    /**
     * 
     *
     * @param string $org 
     * @param null|\Github\Model\UserMembershipsOrgsOrgPatchBody $requestBody 
     */
    public function __construct(string $org, ?\Github\Model\UserMembershipsOrgsOrgPatchBody $requestBody = null)
    {
        $this->org = $org;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(['{org}'], [$this->org], '/user/memberships/orgs/{org}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\UserMembershipsOrgsOrgPatchBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\OrgsUpdateMembershipForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\OrgsUpdateMembershipForAuthenticatedUserNotFoundException
     * @throws \Github\Exception\OrgsUpdateMembershipForAuthenticatedUserUnprocessableEntityException
     *
     * @return null|\Github\Model\OrgMembership
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\OrgMembership', 'json');
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\OrgsUpdateMembershipForAuthenticatedUserForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\OrgsUpdateMembershipForAuthenticatedUserNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\OrgsUpdateMembershipForAuthenticatedUserUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}