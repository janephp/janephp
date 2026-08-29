<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Endpoint;

class GetToken extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Yeah, this is the boring security stuff. Just get your super secret token and move on.
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\Model\Credentials $requestBody
     * @param array $accept Accept content header application/json|application/xml
     */
    public function __construct(?\Jane\Component\OpenApi31\Tests\Expected\Model\Credentials $requestBody = null, array $accept = [])
    {
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/auth/token';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\Model\Credentials) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\Model\Credentials) {
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenTooManyRequestsException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\Token
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Token', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\BadRequestError', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenUnauthorizedException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\UnauthorizedError', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenForbiddenException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\ForbiddenError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenTooManyRequestsException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\TooManyRequestsError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth', 'basicAuth', 'apiKeyQuery', 'apiKeyHeader', 'apiKeyCookie', 'oAuth2', 'openIdConnect'];
    }
}