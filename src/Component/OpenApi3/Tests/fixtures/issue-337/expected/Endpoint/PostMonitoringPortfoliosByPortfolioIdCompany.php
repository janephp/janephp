<?php

namespace CreditSafe\API\Endpoint;

class PostMonitoringPortfoliosByPortfolioIdCompany extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $portfolioId;
    /**
     * Add new company to portfolio
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param null|\CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, ?\CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesPostBody $requestBody = null, array $headerParameters = [])
    {
        $this->portfolioId = $portfolioId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{portfolioId}'], [$this->portfolioId], '/monitoring/portfolios/{portfolioId}/companies');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
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
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdCompanyBadRequestException
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdCompanyUnauthorizedException
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdCompanyForbiddenException
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdCompanyNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdCompanyBadRequestException($response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdCompanyUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdCompanyForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdCompanyNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['bearerAuth'];
    }
}