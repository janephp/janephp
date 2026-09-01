<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Endpoint;

class BuyMuseumTickets extends \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Purchase museum tickets for general entry or special events.
     * @param \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\BuyMuseumTickets $requestBody
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\BuyMuseumTickets $requestBody, array $accept = [])
    {
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/tickets';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\BuyMuseumTickets) {
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\BuyMuseumTicketsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\BuyMuseumTicketsNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\MuseumTicketsConfirmation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Museum\Model\MuseumTicketsConfirmation', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\BuyMuseumTicketsBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\BuyMuseumTicketsNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['MuseumPlaceholderAuth'];
    }
}