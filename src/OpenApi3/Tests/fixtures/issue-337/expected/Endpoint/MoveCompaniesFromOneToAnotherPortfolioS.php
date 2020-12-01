<?php

namespace CreditSafe\API\Endpoint;

class MoveCompaniesFromOneToAnotherPortfolioS extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $portfolioId;
    /**
     * Move companies from one portfolio to single (or) multiple portfolios.
     *
     * @param string $portfolioId The unique identifier of the portfolio you want to move companies from, obtained from `/portfolios`.
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody $requestBody 
     * @param array $queryParameters {
     *     @var bool $removeAll When RemoveAll queryparameter is False, portfolios and companies List needs to be passed. When RemoveAll queryparameter is True, only portfolios need to be passed and companies List must be empty. All companies are moved and deleted from current portfolio
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody $requestBody, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->portfolioId = $portfolioId;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
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
        if ($this->body instanceof \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
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
     * @throws \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSBadRequestException
     * @throws \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSUnauthorizedException
     * @throws \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSForbiddenException
     * @throws \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSBadRequestException();
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSUnauthorizedException();
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSForbiddenException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}