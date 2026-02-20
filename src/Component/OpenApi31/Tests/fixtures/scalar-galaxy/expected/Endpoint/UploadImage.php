<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Endpoint;

class UploadImage extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Got a crazy good photo of a planet? Share it with the world!
     * @param array $accept Accept content header application/json|application/xml
     */
    public function __construct(array $accept = [])
    {
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/planets/{planetId}/image';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\ImageUploadedMessage
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\ImageUploadedMessage', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\BadRequestError', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageForbiddenException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\ForbiddenError', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\NotFoundError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth', 'basicAuth', 'apiKeyQuery', 'apiKeyHeader', 'apiKeyCookie', 'oAuth2', 'openIdConnect'];
    }
}