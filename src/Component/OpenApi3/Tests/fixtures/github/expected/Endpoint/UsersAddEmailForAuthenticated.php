<?php

namespace Github\Endpoint;

class UsersAddEmailForAuthenticated extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    /**
     * This endpoint is accessible with the `user` scope.
     *
     * @param null|mixed $requestBody 
     */
    public function __construct($requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/user/emails';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (isset($this->body)) {
            return array(array('Content-Type' => array('application/json')), json_encode($this->body));
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
     * @throws \Github\Exception\UsersAddEmailForAuthenticatedUnprocessableEntityException
     * @throws \Github\Exception\UsersAddEmailForAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersAddEmailForAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersAddEmailForAuthenticatedUnauthorizedException
     *
     * @return null|mixed|\Psr\Http\Message\StreamInterface
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode((string) $body);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\UsersAddEmailForAuthenticatedUnprocessableEntityException($serializer->deserialize((string) $body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
        if (304 === $status) {
            return $body;
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\UsersAddEmailForAuthenticatedNotFoundException($serializer->deserialize((string) $body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\UsersAddEmailForAuthenticatedForbiddenException($serializer->deserialize((string) $body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\UsersAddEmailForAuthenticatedUnauthorizedException($serializer->deserialize((string) $body, 'Github\\Model\\BasicError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}