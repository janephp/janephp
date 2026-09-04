<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Endpoint;

class CreateBooking extends \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * A booking is a temporary hold on a trip. It is not confirmed until the payment is processed.
     * @param \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Booking $requestBody
     * @param array $accept Accept content header application/json|application/xml|application/problem+json|application/problem+xml
     */
    public function __construct(\Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Booking $requestBody, array $accept = [])
    {
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/bookings';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Booking) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Booking) {
            return [['Content-Type' => ['application/xml']], $this->body];
        }
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingNotFoundException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingConflictException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsPostJsonResponse201
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsPostJsonResponse201', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingUnauthorizedException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingConflictException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingTooManyRequestsException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingInternalServerErrorException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
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