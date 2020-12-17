<?php

namespace Github\Endpoint;

class ScimProvisionAndInviteUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    /**
     * Provision organization membership for a user, and send an activation email to the email address.
     *
     * @param string $org 
     * @param null|\Github\Model\ScimV2OrganizationsOrgUsersPostBody $requestBody 
     */
    public function __construct(string $org, ?\Github\Model\ScimV2OrganizationsOrgUsersPostBody $requestBody = null)
    {
        $this->org = $org;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}'), array($this->org), '/scim/v2/organizations/{org}/Users');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ScimV2OrganizationsOrgUsersPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
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
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
        }
        if (304 === $status) {
            return null;
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ScimProvisionAndInviteUserNotFoundException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ScimProvisionAndInviteUserForbiddenException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ScimProvisionAndInviteUserInternalServerErrorException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ScimProvisionAndInviteUserConflictException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ScimProvisionAndInviteUserBadRequestException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}