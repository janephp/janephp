<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Endpoint;

class GetTrips extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Returns a list of available train trips between the specified origin and destination stations on the given date, and allows for filtering by bicycle and dog allowances.
     *
     * @param array $accept Accept content header application/json|application/xml|application/problem+json|application/problem+xml
     */
    public function __construct(array $accept = [])
    {
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\EndpointTrait;
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
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsUnauthorizedException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsForbiddenException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsTooManyRequestsException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsInternalServerErrorException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Problem', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}