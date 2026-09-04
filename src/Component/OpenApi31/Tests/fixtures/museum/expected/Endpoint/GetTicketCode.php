<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Endpoint;

class GetTicketCode extends \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\Endpoint
{
    protected $ticketId;
    protected $accept;
    /**
     * Return an image of your ticket with scannable QR code. Used for event entry.
     * @param string $ticketId Identifier for a ticket to a museum event. Used to generate ticket image.
     * @param array $accept Accept content header image/png|application/problem+json
     */
    public function __construct(string $ticketId, array $accept = [])
    {
        $this->ticketId = $ticketId;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{ticketId}'], [rawurlencode($this->ticketId)], '/tickets/{ticketId}/qr');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['image/png', 'application/problem+json']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\GetTicketCodeBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\GetTicketCodeNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\GetTicketCodeBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\GetTicketCodeNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['MuseumPlaceholderAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}