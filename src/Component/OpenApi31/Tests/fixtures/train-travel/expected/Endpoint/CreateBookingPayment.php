<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Endpoint;

class CreateBookingPayment extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Endpoint
{
    protected $bookingId;
    protected $accept;
    /**
     * A payment is an attempt to pay for the booking, which will confirm the booking for the user and enable them to get their tickets.
     * @param string $bookingId The ID of the booking to pay for.
     * @param \Jane\Component\OpenApi31\Tests\Expected\Model\BookingPayment $requestBody
     * @param array $accept Accept content header application/json|application/problem+json|application/problem+xml
     */
    public function __construct(string $bookingId, \Jane\Component\OpenApi31\Tests\Expected\Model\BookingPayment $requestBody, array $accept = [])
    {
        $this->bookingId = $bookingId;
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
        return str_replace(['{bookingId}'], [rawurlencode($this->bookingId)], '/bookings/{bookingId}/payment');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\Model\BookingPayment) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/problem+json', 'application/problem+xml']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\BookingsBookingIdPaymentPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\BookingsBookingIdPaymentPostResponse200', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentUnauthorizedException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentForbiddenException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentTooManyRequestsException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentInternalServerErrorException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}