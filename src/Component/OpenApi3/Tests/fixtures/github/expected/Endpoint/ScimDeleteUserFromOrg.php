<?php

namespace Github\Endpoint;

class ScimDeleteUserFromOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $scim_user_id;
    /**
     * 
     *
     * @param string $org 
     * @param string $scimUserId scim_user_id parameter
     */
    public function __construct(string $org, string $scimUserId)
    {
        $this->org = $org;
        $this->scim_user_id = $scimUserId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{scim_user_id}'), array($this->org, $this->scim_user_id), '/scim/v2/organizations/{org}/Users/{scim_user_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ScimDeleteUserFromOrgNotFoundException
     * @throws \Github\Exception\ScimDeleteUserFromOrgForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ScimDeleteUserFromOrgNotFoundException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ScimDeleteUserFromOrgForbiddenException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
        if (304 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}