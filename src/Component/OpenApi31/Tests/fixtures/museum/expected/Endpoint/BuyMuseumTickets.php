<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Endpoint;

class BuyMuseumTickets extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Purchase museum tickets for general entry or special events.
     * @param array $accept Accept content header application/json|application/problem+json
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
        return '/tickets';
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\BuyMuseumTicketsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\BuyMuseumTicketsNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\MuseumTicketsConfirmation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\MuseumTicketsConfirmation', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\BuyMuseumTicketsBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\BuyMuseumTicketsNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['MuseumPlaceholderAuth'];
    }
}