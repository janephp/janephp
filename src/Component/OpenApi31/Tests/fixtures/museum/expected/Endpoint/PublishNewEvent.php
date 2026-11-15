<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Endpoint;

class PublishNewEvent extends \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\Endpoint
{
    /**
     * Publish details of a new or updated event.
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent $requestBody
     */
    public function __construct(?\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/webhooks/publishNewEvent';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\BadResponseException
     *
     * @return null
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (202 === $status) {
            return null;
        }
        throw new \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return ['MuseumPlaceholderAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
    public function getTargetClass(): ?string
    {
        return null;
    }
}