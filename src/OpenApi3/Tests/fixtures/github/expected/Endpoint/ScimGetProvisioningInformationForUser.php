<?php

namespace Github\Endpoint;

class ScimGetProvisioningInformationForUser extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
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
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
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
     * @throws \Github\Exception\ScimGetProvisioningInformationForUserNotFoundException
     * @throws \Github\Exception\ScimGetProvisioningInformationForUserForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ScimGetProvisioningInformationForUserNotFoundException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ScimGetProvisioningInformationForUserForbiddenException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
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