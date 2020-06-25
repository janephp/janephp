<?php

namespace CreditSafe\API\Endpoint;

class ResetPortfolioEventRulesToDefaultValues extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $portfolioId;
    /**
     * Update a portofolios event rules to default state. In Connect, default state means all rules are turned off.
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, array $headerParameters = array())
    {
        $this->portfolioId = $portfolioId;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{portfolioId}'), array($this->portfolioId), '/monitoring/portfolios/{portfolioId}/eventRules/setDefault');
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
     * @throws \CreditSafe\API\Exception\ResetPortfolioEventRulesToDefaultValuesBadRequestException
     * @throws \CreditSafe\API\Exception\ResetPortfolioEventRulesToDefaultValuesUnauthorizedException
     * @throws \CreditSafe\API\Exception\ResetPortfolioEventRulesToDefaultValuesForbiddenException
     * @throws \CreditSafe\API\Exception\ResetPortfolioEventRulesToDefaultValuesNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ResetPortfolioEventRulesToDefaultValuesBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ResetPortfolioEventRulesToDefaultValuesUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ResetPortfolioEventRulesToDefaultValuesForbiddenException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ResetPortfolioEventRulesToDefaultValuesNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}