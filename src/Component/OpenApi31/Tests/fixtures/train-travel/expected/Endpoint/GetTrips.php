<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Endpoint;

class GetTrips extends \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Returns a list of available train trips between the specified origin and destination stations on the given date, and allows for filtering by bicycle and dog allowances.
     *
     * @param array{
     *    "page"?: int, //The page number to return
     *    "limit"?: int, //The number of items to return per page
     *    "origin": string, //The ID of the origin station
     *    "destination": string, //The ID of the destination station
     *    "date": string, //The date and time of the trip in ISO 8601 format in origin station's timezone.
     *    "bicycles"?: bool, //Only return trips where bicycles are known to be allowed
     *    "dogs"?: bool, //Only return trips where dogs are known to be allowed
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/xml|application/problem+json|application/problem+xml
     */
    public function __construct(array $queryParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/trips';
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
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['page', 'limit', 'origin', 'destination', 'date', 'bicycles', 'dogs']);
        $optionsResolver->setRequired(['origin', 'destination', 'date']);
        $optionsResolver->setDefaults(['page' => 1, 'limit' => 10, 'bicycles' => false, 'dogs' => false]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('origin', ['string']);
        $optionsResolver->addAllowedTypes('destination', ['string']);
        $optionsResolver->addAllowedTypes('date', ['string']);
        $optionsResolver->addAllowedTypes('bicycles', ['bool']);
        $optionsResolver->addAllowedTypes('dogs', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\TripsGetJsonResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\TripsGetJsonResponse200', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsUnauthorizedException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsForbiddenException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsTooManyRequestsException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsInternalServerErrorException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}