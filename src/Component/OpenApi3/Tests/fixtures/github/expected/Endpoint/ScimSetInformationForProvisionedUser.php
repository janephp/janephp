<?php

namespace Github\Endpoint;

class ScimSetInformationForProvisionedUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $scim_user_id;
    /**
    * Replaces an existing provisioned user's information. You must provide all the information required for the user as if you were provisioning them for the first time. Any existing user information that you don't provide will be removed. If you want to only update a specific attribute, use the [Update an attribute for a SCIM user](https://developer.github.com/v3/scim/#update-an-attribute-for-a-scim-user) endpoint instead.
    
    You must at least provide the required values for the user: `userName`, `name`, and `emails`.
    
    **Warning:** Setting `active: false` removes the user from the organization, deletes the external identity, and deletes the associated `{scim_user_id}`.
    *
    * @param string $org 
    * @param string $scimUserId scim_user_id parameter
    * @param null|\Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPutBody $requestBody 
    */
    public function __construct(string $org, string $scimUserId, ?\Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPutBody $requestBody = null)
    {
        $this->org = $org;
        $this->scim_user_id = $scimUserId;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{scim_user_id}'), array($this->org, $this->scim_user_id), '/scim/v2/organizations/{org}/Users/{scim_user_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPutBody) {
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
     * @throws \Github\Exception\ScimSetInformationForProvisionedUserNotFoundException
     * @throws \Github\Exception\ScimSetInformationForProvisionedUserForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (304 === $status) {
            return null;
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ScimSetInformationForProvisionedUserNotFoundException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ScimSetInformationForProvisionedUserForbiddenException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}