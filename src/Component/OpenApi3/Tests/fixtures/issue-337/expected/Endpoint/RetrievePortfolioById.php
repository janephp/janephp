<?php

namespace CreditSafe\API\Endpoint;

class RetrievePortfolioById extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $portfolioId;
    /**
     * Get the portfolio with portfolioId
     *
     * @param string $portfolioId The unique identifier for the portfolio that you wish to retrieve, obtained from `/portfolios`.
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, array $headerParameters = [])
    {
        $this->portfolioId = $portfolioId;
        $this->headerParameters = $headerParameters;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{portfolioId}'], [$this->portfolioId], '/monitoring/portfolios/{portfolioId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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
     * @throws \CreditSafe\API\Exception\RetrievePortfolioByIdBadRequestException
     * @throws \CreditSafe\API\Exception\RetrievePortfolioByIdUnauthorizedException
     * @throws \CreditSafe\API\Exception\RetrievePortfolioByIdForbiddenException
     * @throws \CreditSafe\API\Exception\RetrievePortfolioByIdNotFoundException
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
            throw new \CreditSafe\API\Exception\RetrievePortfolioByIdBadRequestException($response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\RetrievePortfolioByIdUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\RetrievePortfolioByIdForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\RetrievePortfolioByIdNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['bearerAuth'];
    }
}