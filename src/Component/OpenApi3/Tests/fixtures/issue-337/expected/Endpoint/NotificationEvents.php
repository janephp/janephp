<?php

namespace CreditSafe\API\Endpoint;

class NotificationEvents extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    /**
     * Get all notification events generated for companies monitored in your portfolios, based on the notification rules enabled. The notification events returned will be filtered based upon the supplied search criteria.
     *
     * @param array $queryParameters {
     *     @var string $searchQuery Return notificationEvents that match the given value
     *     @var string $sortBy Sort results by this column. Null values of sort column are listed after non-nulls.
     *     @var string $sortDir The direction that you wish to sort results by.
     *     @var string $startDate The start date on which results are filtered.
     *     @var string $endDate The end date on which results are filtered.
     *     @var int $page Starting page number (indexed from 0)
     *     @var int $pageSize Number of items to return per Page (max 1000)
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/monitoring/notificationEvents';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['searchQuery', 'sortBy', 'sortDir', 'startDate', 'endDate', 'page', 'pageSize']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['sortBy' => 'companyName', 'sortDir' => 'asc', 'page' => 0, 'pageSize' => 50]);
        $optionsResolver->addAllowedTypes('searchQuery', ['string']);
        $optionsResolver->addAllowedTypes('sortBy', ['string']);
        $optionsResolver->addAllowedTypes('sortDir', ['string']);
        $optionsResolver->addAllowedTypes('startDate', ['string']);
        $optionsResolver->addAllowedTypes('endDate', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('pageSize', ['int']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
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
     * @throws \CreditSafe\API\Exception\NotificationEventsBadRequestException
     * @throws \CreditSafe\API\Exception\NotificationEventsUnauthorizedException
     * @throws \CreditSafe\API\Exception\NotificationEventsForbiddenException
     * @throws \CreditSafe\API\Exception\NotificationEventsNotFoundException
     *
     * @return null|\CreditSafe\API\Model\NotificationEventsResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CreditSafe\\API\\Model\\NotificationEventsResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\NotificationEventsBadRequestException($response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\NotificationEventsUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\NotificationEventsForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\NotificationEventsNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['bearerAuth'];
    }
}