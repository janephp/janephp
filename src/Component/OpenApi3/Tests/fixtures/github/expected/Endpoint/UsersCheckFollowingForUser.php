<?php

namespace Github\Endpoint;

class UsersCheckFollowingForUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $username;
    protected $target_user;
    /**
     * 
     *
     * @param string $username 
     * @param string $targetUser target_user parameter
     */
    public function __construct(string $username, string $targetUser)
    {
        $this->username = $username;
        $this->target_user = $targetUser;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{username}', '{target_user}'), array($this->username, $this->target_user), '/users/{username}/following/{target_user}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\UsersCheckFollowingForUserNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Github\Exception\UsersCheckFollowingForUserNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}