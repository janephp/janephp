<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Endpoint;

class GetMuseumHours extends \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Get upcoming museum operating hours.
     * @param array{
     *    "startDate"?: string, //Starting date to retrieve future operating hours from. Defaults to today's date.
     *    "page"?: int, //Page number to retrieve.
     *    "limit"?: int, //Number of days per page.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(array $queryParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/museum-hours';
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
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['startDate', 'page', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'limit' => 10]);
        $optionsResolver->addAllowedTypes('startDate', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\GetMuseumHoursBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\GetMuseumHoursNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\MuseumDailyHours[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Museum\Model\MuseumDailyHours[]', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\GetMuseumHoursBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\GetMuseumHoursNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['MuseumPlaceholderAuth'];
    }
}