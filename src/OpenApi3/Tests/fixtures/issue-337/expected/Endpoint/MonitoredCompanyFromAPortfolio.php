<?php

namespace CreditSafe\API\Endpoint;

class MonitoredCompanyFromAPortfolio extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $portfolioId;
    protected $id;
    /**
    * Get the company
    with companyId =
    {companyId}
    
    *
    * @param string $portfolioId 
    * @param string $id 
    * @param array $headerParameters {
    *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
    * }
    */
    public function __construct(string $portfolioId, string $id, array $headerParameters = array())
    {
        $this->portfolioId = $portfolioId;
        $this->id = $id;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{portfolioId}', '{id}'), array($this->portfolioId, $this->id), '/monitoring/portfolios/{portfolioId}/companies/{id}');
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
     * @throws \CreditSafe\API\Exception\MonitoredCompanyFromAPortfolioBadRequestException
     * @throws \CreditSafe\API\Exception\MonitoredCompanyFromAPortfolioUnauthorizedException
     * @throws \CreditSafe\API\Exception\MonitoredCompanyFromAPortfolioForbiddenException
     * @throws \CreditSafe\API\Exception\MonitoredCompanyFromAPortfolioNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\MonitoredCompanyFromAPortfolioBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\MonitoredCompanyFromAPortfolioUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\MonitoredCompanyFromAPortfolioForbiddenException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\MonitoredCompanyFromAPortfolioNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}