<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint;

class GetToken extends \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Yeah, this is the boring security stuff. Just get your super secret token and move on.
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Credentials $requestBody
     * @param array $accept Accept content header application/json|application/xml
     */
    public function __construct(?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Credentials $requestBody = null, array $accept = [])
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
        return '/auth/token';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Credentials) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Credentials) {
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenTooManyRequestsException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Token
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Token', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\BadRequestError', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenUnauthorizedException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UnauthorizedError', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenForbiddenException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\ForbiddenError', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenTooManyRequestsException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\TooManyRequestsError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth', 'basicAuth', 'apiKeyQuery', 'apiKeyHeader', 'apiKeyCookie', 'oAuth2', 'openIdConnect'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}