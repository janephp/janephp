<?php

namespace Github\Endpoint;

class ScimUpdateAttributeForUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $scim_user_id;
    protected $accept;
    /**
    * Allows you to change a provisioned user's individual attributes. To change a user's values, you must provide a specific `Operations` JSON format that contains at least one of the `add`, `remove`, or `replace` operations. For examples and more information on the SCIM operations format, see the [SCIM specification](https://tools.ietf.org/html/rfc7644#section-3.5.2).
    
    **Note:** Complicated SCIM `path` selectors that include filters are not supported. For example, a `path` selector defined as `"path": "emails[type eq \"work\"]"` will not work.
    
    **Warning:** If you set `active:false` using the `replace` operation (as shown in the JSON example below), it removes the user from the organization, deletes the external identity, and deletes the associated `:scim_user_id`.
    
    ```
    {
     "Operations":[{
       "op":"replace",
       "value":{
         "active":false
       }
     }]
    }
    ```
    *
    * @param string $org 
    * @param string $scimUserId scim_user_id parameter
    * @param null|\Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPatchBody $requestBody 
    * @param array $accept Accept content header application/scim+json|application/json
    */
    public function __construct(string $org, string $scimUserId, ?\Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPatchBody $requestBody = null, array $accept = array())
    {
        $this->org = $org;
        $this->scim_user_id = $scimUserId;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{scim_user_id}'), array($this->org, $this->scim_user_id), '/scim/v2/organizations/{org}/Users/{scim_user_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPatchBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return array('Accept' => array('application/scim+json', 'application/json'));
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ScimUpdateAttributeForUserNotFoundException
     * @throws \Github\Exception\ScimUpdateAttributeForUserForbiddenException
     * @throws \Github\Exception\ScimUpdateAttributeForUserBadRequestException
     * @throws \Github\Exception\ScimUpdateAttributeForUserTooManyRequestsException
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
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ScimUpdateAttributeForUserNotFoundException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ScimUpdateAttributeForUserForbiddenException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ScimUpdateAttributeForUserBadRequestException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ScimUpdateAttributeForUserTooManyRequestsException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}