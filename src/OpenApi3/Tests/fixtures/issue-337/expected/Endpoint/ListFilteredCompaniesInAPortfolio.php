<?php

namespace CreditSafe\API\Endpoint;

class ListFilteredCompaniesInAPortfolio extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $portfolioId;
    /**
     * Get all companies from a specific portfolio based on the portfolio id, optionally filter with query parameters
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param array $queryParameters {
     *     @var string $searchQuery Return companies that match the given value
     *     @var int $pageSize Number of items to return per Page (max 1000)
     *     @var int $page Starting page number (indexed from 0)
     *     @var string $countryCode Return <<resourcePathName>> that match the given countryCode
     *     @var bool $events If set to true, all events will be returned for each company
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
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{portfolioId}'), array($this->portfolioId), '/monitoring/portfolios/{portfolioId}/companies');
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
        $optionsResolver->setDefined(array('searchQuery', 'pageSize', 'page', 'countryCode', 'events'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('pageSize' => 50, 'page' => 0, 'events' => false));
        $optionsResolver->setAllowedTypes('searchQuery', array('string'));
        $optionsResolver->setAllowedTypes('pageSize', array('int'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('countryCode', array('string'));
        $optionsResolver->setAllowedTypes('events', array('bool'));
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
     * @throws \CreditSafe\API\Exception\ListFilteredCompaniesInAPortfolioBadRequestException
     * @throws \CreditSafe\API\Exception\ListFilteredCompaniesInAPortfolioUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListFilteredCompaniesInAPortfolioForbiddenException
     * @throws \CreditSafe\API\Exception\ListFilteredCompaniesInAPortfolioNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ListFilteredCompaniesInAPortfolioBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ListFilteredCompaniesInAPortfolioUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ListFilteredCompaniesInAPortfolioForbiddenException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ListFilteredCompaniesInAPortfolioNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}