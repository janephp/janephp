<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Endpoint;

class DeleteSpecialEvent extends \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\Endpoint
{
    protected $eventId;
    /**
     * Delete a special event from the collection. Allows museum to cancel planned events.
     * @param string $eventId Identifier for a special event.
     */
    public function __construct(string $eventId)
    {
        $this->eventId = $eventId;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{eventId}'], [rawurlencode($this->eventId)], '/special-events/{eventId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/problem+json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\DeleteSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\DeleteSpecialEventUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\DeleteSpecialEventNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (204 === $status) {
            return null;
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\DeleteSpecialEventBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\DeleteSpecialEventUnauthorizedException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\DeleteSpecialEventNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['MuseumPlaceholderAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}