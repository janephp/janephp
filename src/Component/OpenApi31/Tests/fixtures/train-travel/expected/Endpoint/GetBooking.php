<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Endpoint;

class GetBooking extends \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\Endpoint
{
    protected $bookingId;
    protected $accept;
    /**
     * Returns the details of a specific booking.
     * @param string $bookingId The ID of the booking to retrieve.
     * @param array $accept Accept content header application/json|application/xml|application/problem+json|application/problem+xml
     */
    public function __construct(string $bookingId, array $accept = [])
    {
        $this->bookingId = $bookingId;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{bookingId}'], [rawurlencode($this->bookingId)], '/bookings/{bookingId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/xml', 'application/problem+json', 'application/problem+xml']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingNotFoundException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsBookingIdGetJsonResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsBookingIdGetJsonResponse200', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingUnauthorizedException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingForbiddenException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingTooManyRequestsException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingInternalServerErrorException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}