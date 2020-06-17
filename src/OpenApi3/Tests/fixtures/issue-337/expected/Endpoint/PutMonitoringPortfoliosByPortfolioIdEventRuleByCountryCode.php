<?php

namespace CreditSafe\API\Endpoint;

class PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCode extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $portfolioId;
    protected $countryCode;
    /**
     * Update eventRules
     *
     * @param string $portfolioId 
     * @param string $countryCode Country code to show events for
     * @param \stdClass $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, string $countryCode, \stdClass $requestBody, array $headerParameters = array())
    {
        $this->portfolioId = $portfolioId;
        $this->countryCode = $countryCode;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
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
        if ($this->body instanceof \stdClass) {
            return array(array('Content-Type' => array('application/json')), json_encode($this->body));
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
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeForbiddenException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}