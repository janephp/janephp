<?php

namespace Github\Endpoint;

class OrgsRemoveMembershipForUser extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $org;
    protected $username;
    /**
    * In order to remove a user's membership with an organization, the authenticated user must be an organization owner.
    
    If the specified user is an active member of the organization, this will remove them from the organization. If the specified user has been invited to the organization, this will cancel their invitation. The specified user will receive an email notification in both cases.
    *
    * @param string $org 
    * @param string $username 
    */
    public function __construct(string $org, string $username)
    {
        $this->org = $org;
        $this->username = $username;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{username}'), array($this->org, $this->username), '/orgs/{org}/memberships/{username}');
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
     * @throws \Github\Exception\OrgsRemoveMembershipForUserForbiddenException
     * @throws \Github\Exception\OrgsRemoveMembershipForUserNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\OrgsRemoveMembershipForUserForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\OrgsRemoveMembershipForUserNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}