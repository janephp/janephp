<?php

namespace CreditSafe\API\Endpoint;

class UpdateCompanyDetailsInAPortfolio extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $portfolioId;
    protected $id;
    /**
     * Updates the company details in a specified portfolio
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param string $id A company Safe Number or Connect ID.
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesIdPatchBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, string $id, \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesIdPatchBody $requestBody, array $headerParameters = array())
    {
        $this->portfolioId = $portfolioId;
        $this->id = $id;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{portfolioId}', '{id}'), array($this->portfolioId, $this->id), '/monitoring/portfolios/{portfolioId}/companies/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesIdPatchBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
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
     * @throws \CreditSafe\API\Exception\UpdateCompanyDetailsInAPortfolioBadRequestException
     * @throws \CreditSafe\API\Exception\UpdateCompanyDetailsInAPortfolioUnauthorizedException
     * @throws \CreditSafe\API\Exception\UpdateCompanyDetailsInAPortfolioForbiddenException
     * @throws \CreditSafe\API\Exception\UpdateCompanyDetailsInAPortfolioNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\UpdateCompanyDetailsInAPortfolioBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\UpdateCompanyDetailsInAPortfolioUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\UpdateCompanyDetailsInAPortfolioForbiddenException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\UpdateCompanyDetailsInAPortfolioNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}