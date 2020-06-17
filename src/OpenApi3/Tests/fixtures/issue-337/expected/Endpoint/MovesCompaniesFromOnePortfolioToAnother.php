<?php

namespace CreditSafe\API\Endpoint;

class MovesCompaniesFromOnePortfolioToAnother extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $portfolioId;
    /**
     * Move companies from one portfolio to single (or) multiple portfolios.
     *
     * @param string $portfolioId 
     * @param \stdClass $requestBody 
     * @param array $queryParameters {
     *     @var bool $removeAll When RemoveAll queryparameter is False, portfolios and companies List needs to be passed. When RemoveAll queryparameter is True, only portfolios need to be passed and companies List must be empty. All companies are moved and deleted from current portfolio
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, \stdClass $requestBody, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->portfolioId = $portfolioId;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{portfolioId}'), array($this->portfolioId), '/monitoring/portfolios/{portfolioId}/companies/remove');
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
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('removeAll'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('removeAll' => false));
        $optionsResolver->setAllowedTypes('removeAll', array('bool'));
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
     * @throws \CreditSafe\API\Exception\MovesCompaniesFromOnePortfolioToAnotherBadRequestException
     * @throws \CreditSafe\API\Exception\MovesCompaniesFromOnePortfolioToAnotherUnauthorizedException
     * @throws \CreditSafe\API\Exception\MovesCompaniesFromOnePortfolioToAnotherForbiddenException
     * @throws \CreditSafe\API\Exception\MovesCompaniesFromOnePortfolioToAnotherNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\MovesCompaniesFromOnePortfolioToAnotherBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\MovesCompaniesFromOnePortfolioToAnotherUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\MovesCompaniesFromOnePortfolioToAnotherForbiddenException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\MovesCompaniesFromOnePortfolioToAnotherNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}