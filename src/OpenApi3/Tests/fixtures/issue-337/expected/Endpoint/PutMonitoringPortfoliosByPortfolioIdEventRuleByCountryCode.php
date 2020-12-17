<?php

namespace CreditSafe\API\Endpoint;

class PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCode extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $portfolioId;
    protected $countryCode;
    /**
     * Update eventRules for a portfolio
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param string $countryCode Country code to show events for
     * @param null|\CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem[] $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, string $countryCode, ?array $requestBody = null, array $headerParameters = array())
    {
        $this->portfolioId = $portfolioId;
        $this->countryCode = $countryCode;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{portfolioId}', '{countryCode}'), array($this->portfolioId, $this->countryCode), '/monitoring/portfolios/{portfolioId}/eventRules/{countryCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem) {
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
     * @throws \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeBadRequestException
     * @throws \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeUnauthorizedException
     * @throws \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeForbiddenException
     * @throws \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeBadRequestException();
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeUnauthorizedException();
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeForbiddenException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}