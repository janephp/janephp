<?php

namespace CreditSafe\API\Endpoint;

class ListNotificationEventsInAPortfolioFiltered extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $portfolioId;
    /**
     * Get all notificationEvents based on the portfolio id, optionally filter with query parameters
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param array $queryParameters {
     *     @var string $searchQuery Return notificationEvents that match the given value
     *     @var string $sortDir 
     *     @var int $pageSize Number of items to return per Page (max 1000)
     *     @var int $page Starting page number (indexed from 0)
     *     @var string $sortBy Sort results by this column. Null values of sort column are listed after non-nulls.
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->portfolioId = $portfolioId;
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
        return str_replace(array('{portfolioId}'), array($this->portfolioId), '/monitoring/portfolios/{portfolioId}/notificationEvents');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('searchQuery', 'sortDir', 'pageSize', 'page', 'sortBy'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('sortDir' => 'asc', 'pageSize' => 50, 'page' => 0));
        $optionsResolver->setAllowedTypes('searchQuery', array('string'));
        $optionsResolver->setAllowedTypes('sortDir', array('string'));
        $optionsResolver->setAllowedTypes('pageSize', array('int'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('sortBy', array('string'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('Authorization'));
        $optionsResolver->setRequired(array('Authorization'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('Authorization', array('string'));
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
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredForbiddenException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}