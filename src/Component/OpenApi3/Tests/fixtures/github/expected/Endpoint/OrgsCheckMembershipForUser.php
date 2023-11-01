<?php

namespace Github\Endpoint;

class OrgsCheckMembershipForUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
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
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{org}', '{username}'], [$this->org, $this->username], '/orgs/{org}/members/{username}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\OrgsCheckMembershipForUserNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (302 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Github\Exception\OrgsCheckMembershipForUserNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}