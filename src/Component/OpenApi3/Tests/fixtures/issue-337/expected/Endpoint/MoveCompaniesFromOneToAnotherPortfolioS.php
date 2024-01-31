<?php

namespace CreditSafe\API\Endpoint;

class MoveCompaniesFromOneToAnotherPortfolioS extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $portfolioId;
    /**
     * Move companies from one portfolio to single (or) multiple portfolios.
     *
     * @param string $portfolioId The unique identifier of the portfolio you want to move companies from, obtained from `/portfolios`.
     * @param null|\CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody $requestBody 
     * @param array $queryParameters {
     *     @var bool $removeAll When RemoveAll queryparameter is False, portfolios and companies List needs to be passed. When RemoveAll queryparameter is True, only portfolios need to be passed and companies List must be empty. All companies are moved and deleted from current portfolio
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, ?\CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody $requestBody = null, array $queryParameters = [], array $headerParameters = [])
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
        return str_replace(['{portfolioId}'], [$this->portfolioId], '/monitoring/portfolios/{portfolioId}/companies/remove');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['removeAll']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['removeAll' => false]);
        $optionsResolver->addAllowedTypes('removeAll', ['bool']);
        return $optionsResolver;
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
     * @throws \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSBadRequestException
     * @throws \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSUnauthorizedException
     * @throws \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSForbiddenException
     * @throws \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSBadRequestException($response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['bearerAuth'];
    }
}