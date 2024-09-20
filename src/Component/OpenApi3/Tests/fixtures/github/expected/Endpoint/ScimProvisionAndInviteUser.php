<?php

namespace Github\Endpoint;

class ScimProvisionAndInviteUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $accept;
    /**
     * Provision organization membership for a user, and send an activation email to the email address.
     * @param string $org
     * @param null|\Github\Model\ScimV2OrganizationsOrgUsersPostBody $requestBody
     * @param array $accept Accept content header application/scim+json|application/json
     */
    public function __construct(string $org, ?\Github\Model\ScimV2OrganizationsOrgUsersPostBody $requestBody = null, array $accept = [])
    {
        $this->org = $org;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{org}'], [$this->org], '/scim/v2/organizations/{org}/Users');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Github\Model\ScimV2OrganizationsOrgUsersPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/scim+json', 'application/json']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ScimProvisionAndInviteUserNotFoundException
     * @throws \Github\Exception\ScimProvisionAndInviteUserForbiddenException
     * @throws \Github\Exception\ScimProvisionAndInviteUserInternalServerErrorException
     * @throws \Github\Exception\ScimProvisionAndInviteUserConflictException
     * @throws \Github\Exception\ScimProvisionAndInviteUserBadRequestException
     *
     * @return null|\Github\Model\ScimUser
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos(strtolower($contentType), 'application/scim+json') !== false)) {
            return $serializer->deserialize($body, 'Github\Model\ScimUser', 'json');
        }
        if (304 === $status) {
            return null;
        }
        if (404 === $status) {
            if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
                throw new \Github\Exception\ScimProvisionAndInviteUserNotFoundException($serializer->deserialize($body, 'Github\Model\ScimError', 'json'), $response);
            }
            if (mb_strpos(strtolower($contentType), 'application/scim+json') !== false) {
                throw new \Github\Exception\ScimProvisionAndInviteUserNotFoundException($serializer->deserialize($body, 'Github\Model\ScimError', 'json'), $response);
            }
        }
        if (403 === $status) {
            if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
                throw new \Github\Exception\ScimProvisionAndInviteUserForbiddenException($serializer->deserialize($body, 'Github\Model\ScimError', 'json'), $response);
            }
            if (mb_strpos(strtolower($contentType), 'application/scim+json') !== false) {
                throw new \Github\Exception\ScimProvisionAndInviteUserForbiddenException($serializer->deserialize($body, 'Github\Model\ScimError', 'json'), $response);
            }
        }
        if (500 === $status) {
            if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
                throw new \Github\Exception\ScimProvisionAndInviteUserInternalServerErrorException($serializer->deserialize($body, 'Github\Model\ScimError', 'json'), $response);
            }
            if (mb_strpos(strtolower($contentType), 'application/scim+json') !== false) {
                throw new \Github\Exception\ScimProvisionAndInviteUserInternalServerErrorException($serializer->deserialize($body, 'Github\Model\ScimError', 'json'), $response);
            }
        }
        if (409 === $status) {
            if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
                throw new \Github\Exception\ScimProvisionAndInviteUserConflictException($serializer->deserialize($body, 'Github\Model\ScimError', 'json'), $response);
            }
            if (mb_strpos(strtolower($contentType), 'application/scim+json') !== false) {
                throw new \Github\Exception\ScimProvisionAndInviteUserConflictException($serializer->deserialize($body, 'Github\Model\ScimError', 'json'), $response);
            }
        }
        if (400 === $status) {
            if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
                throw new \Github\Exception\ScimProvisionAndInviteUserBadRequestException($serializer->deserialize($body, 'Github\Model\ScimError', 'json'), $response);
            }
            if (mb_strpos(strtolower($contentType), 'application/scim+json') !== false) {
                throw new \Github\Exception\ScimProvisionAndInviteUserBadRequestException($serializer->deserialize($body, 'Github\Model\ScimError', 'json'), $response);
            }
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}