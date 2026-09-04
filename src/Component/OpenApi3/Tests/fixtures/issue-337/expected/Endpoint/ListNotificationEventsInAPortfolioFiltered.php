<?php

namespace CreditSafe\API\Endpoint;

class ListNotificationEventsInAPortfolioFiltered extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $portfolioId;
    /**
     * Get all notificationEvents based on the portfolio id, optionally filter with query parameters
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param array{
     *    "searchQuery"?: string, //Return notificationEvents that match the given value
     *    "sortDir"?: string,
     *    "pageSize"?: int, //Number of items to return per Page (max 1000)
     *    "page"?: int, //Starting page number (indexed from 0)
     *    "sortBy"?: string, //Sort results by this column. Null values of sort column are listed after non-nulls.
     * } $queryParameters
     * @param array{
     *    "Authorization": string, //Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * } $headerParameters
     */
    public function __construct(string $portfolioId, array $queryParameters = [], array $headerParameters = [])
    {
        $this->portfolioId = $portfolioId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{portfolioId}'], [rawurlencode($this->portfolioId)], '/monitoring/portfolios/{portfolioId}/notificationEvents');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['searchQuery', 'sortDir', 'pageSize', 'page', 'sortBy']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['sortDir' => 'asc', 'pageSize' => 50, 'page' => 0]);
        $optionsResolver->addAllowedTypes('searchQuery', ['string']);
        $optionsResolver->addAllowedTypes('sortDir', ['string']);
        $optionsResolver->addAllowedTypes('pageSize', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('sortBy', ['string']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Authorization']);
        $optionsResolver->setRequired(['Authorization']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredBadRequestException
     * @throws \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredForbiddenException
     * @throws \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                return $decodedBody;
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredBadRequestException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredUnauthorizedException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredForbiddenException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredNotFoundException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}