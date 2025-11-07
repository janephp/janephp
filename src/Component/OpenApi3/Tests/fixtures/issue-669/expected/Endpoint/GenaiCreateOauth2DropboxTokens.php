<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiCreateOauth2DropboxTokens extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * To obtain the refresh token, needed for creation of data sources, send a GET request to `/v2/gen-ai/oauth2/dropbox/tokens`. Pass the code you obtrained from the oauth flow in the field 'code'
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiDropboxOauth2GetTokensInput $requestBody
     */
    public function __construct(?\Jane\Generated\DigitalOcean\Model\ApiDropboxOauth2GetTokensInput $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v2/gen-ai/oauth2/dropbox/tokens';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\ApiDropboxOauth2GetTokensInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateOauth2DropboxTokensUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateOauth2DropboxTokensNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateOauth2DropboxTokensTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateOauth2DropboxTokensInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiDropboxOauth2GetTokensOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiDropboxOauth2GetTokensOutput', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiCreateOauth2DropboxTokensUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiCreateOauth2DropboxTokensNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiCreateOauth2DropboxTokensTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiCreateOauth2DropboxTokensInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}