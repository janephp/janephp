<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint;

class CreateUser extends \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Time to create a user account, eh?
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UserSignupPostBody $requestBody
     * @param array $accept Accept content header application/json|application/xml
     */
    public function __construct(?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UserSignupPostBody $requestBody = null, array $accept = [])
    {
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/user/signup';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UserSignupPostBody) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UserSignupPostBody) {
            return [['Content-Type' => ['application/xml']], $this->body];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/xml']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserConflictException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserUnprocessableEntityException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\User
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\User', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\BadRequestError', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserUnauthorizedException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UnauthorizedError', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserForbiddenException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\ForbiddenError', 'json'), $response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserConflictException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Conflict', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserUnprocessableEntityException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UnprocessableEntity', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth', 'basicAuth', 'apiKeyQuery', 'apiKeyHeader', 'apiKeyCookie', 'oAuth2', 'openIdConnect'];
    }
}