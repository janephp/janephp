<?php

namespace Github\Endpoint;

class OrgsRemoveMember extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $org;
    protected $username;
    /**
     * Removing a user from this list will remove them from all teams and they will no longer have any access to the organization's repositories.
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
        return str_replace(array('{org}', '{username}'), array($this->org, $this->username), '/orgs/{org}/members/{username}');
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
     * @throws \Github\Exception\OrgsRemoveMemberForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\OrgsRemoveMemberForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}