<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Endpoint;

class GetSpecialEvent extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Endpoint
{
    protected $eventId;
    protected $accept;
    /**
     * Get details about a special event.
     * @param string $eventId Identifier for a special event.
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(string $eventId, array $accept = [])
    {
        $this->eventId = $eventId;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{eventId}'], [rawurlencode($this->eventId)], '/special-events/{eventId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/problem+json']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetSpecialEventNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEvent
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEvent', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetSpecialEventBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetSpecialEventNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['MuseumPlaceholderAuth'];
    }
}