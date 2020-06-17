<?php

namespace CreditSafe\API\Endpoint;

class GetFilteredPortfolioEventRules extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $portfolioId;
    protected $countryCode;
    /**
     * Get all eventRules, optionally filtered
     *
     * @param string $portfolioId 
     * @param string $countryCode Country code to show events for
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, string $countryCode, array $headerParameters = array())
    {
        $this->portfolioId = $portfolioId;
        $this->countryCode = $countryCode;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{portfolioId}', '{countryCode}'), array($this->portfolioId, $this->countryCode), '/monitoring/portfolios/{portfolioId}/eventRules/{countryCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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
     * @throws \CreditSafe\API\Exception\GetFilteredPortfolioEventRulesBadRequestException
     * @throws \CreditSafe\API\Exception\GetFilteredPortfolioEventRulesUnauthorizedException
     * @throws \CreditSafe\API\Exception\GetFilteredPortfolioEventRulesForbiddenException
     * @throws \CreditSafe\API\Exception\GetFilteredPortfolioEventRulesNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\GetFilteredPortfolioEventRulesBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\GetFilteredPortfolioEventRulesUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\GetFilteredPortfolioEventRulesForbiddenException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\GetFilteredPortfolioEventRulesNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}