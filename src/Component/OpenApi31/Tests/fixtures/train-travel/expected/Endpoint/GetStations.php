<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Endpoint;

class GetStations extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Returns a paginated and searchable list of all train stations.
     * @param array{
     *    "page"?: int, //The page number to return
     *    "limit"?: int, //The number of items to return per page
     *    "coordinates"?: string, //The latitude and longitude of the user's location, to narrow down the search results to sites within a proximity of this location.
     *    "search"?: string, //A search term to filter the list of stations by name or address.
     *    "country"?: string, //Filter stations by country code
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/xml|application/problem+json|application/problem+xml
     */
    public function __construct(array $queryParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/stations';
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
        $optionsResolver->setDefined(['page', 'limit', 'coordinates', 'search', 'country']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'limit' => 10]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('coordinates', ['string']);
        $optionsResolver->addAllowedTypes('search', ['string']);
        $optionsResolver->addAllowedTypes('country', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\StationsGetJsonResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\StationsGetJsonResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsUnauthorizedException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsForbiddenException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsTooManyRequestsException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsInternalServerErrorException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}