<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Endpoint;

class UpdateSpecialEvent extends \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\Endpoint
{
    protected $eventId;
    protected $accept;
    /**
     * Update the details of a special event.
     * @param string $eventId Identifier for a special event.
     * @param \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEventFields $requestBody
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(string $eventId, \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEventFields $requestBody, array $accept = [])
    {
        $this->eventId = $eventId;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{eventId}'], [rawurlencode($this->eventId)], '/special-events/{eventId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEventFields) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\UpdateSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\UpdateSpecialEventNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\UpdateSpecialEventBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\UpdateSpecialEventNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['MuseumPlaceholderAuth'];
    }
}