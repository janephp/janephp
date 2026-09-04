<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Endpoint;

class DeleteBooking extends \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\Endpoint
{
    protected $bookingId;
    protected $accept;
    /**
     * Deletes a booking, cancelling the hold on the trip.
     * @param string $bookingId The ID of the booking to retrieve.
     * @param array $accept Accept content header application/problem+json|application/problem+xml
     */
    public function __construct(string $bookingId, array $accept = [])
    {
        $this->bookingId = $bookingId;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{bookingId}'], [rawurlencode($this->bookingId)], '/bookings/{bookingId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/problem+json', 'application/problem+xml']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingNotFoundException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingInternalServerErrorException
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
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingUnauthorizedException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingForbiddenException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingTooManyRequestsException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingInternalServerErrorException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}