<?php

namespace Github\Endpoint;

class OrgsCheckMembershipForUser extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $org;
    protected $username;
    /**
     * Check if a user is, publicly or privately, a member of the organization.
     *
     * @param string $org 
     * @param string $username 
     */
    public function __construct(string $org, string $username)
    {
        $this->org = $org;
        $this->username = $username;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{username}'), array($this->org, $this->username), '/orgs/{org}/members/{username}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\OrgsCheckMembershipForUserNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (302 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Github\Exception\OrgsCheckMembershipForUserNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}