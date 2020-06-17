<?php

namespace CreditSafe\API\Endpoint;

class CopyCompaniesToAnotherPortfolio extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $portfolioId;
    /**
     * Copy companies from one portfolio to single (or) multiple portfolios.
     *
     * @param string $portfolioId 
     * @param \stdClass $requestBody 
     * @param array $queryParameters {
     *     @var bool $copyAll When CopyAll queryparameter is False, portfolios and companies list needs to be passed. When CopyAll queryparameter is True, only portfolios need to be passed and companies List must be empty. All companies are copied from current portfolio are considered here.
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
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{portfolioId}'), array($this->portfolioId), '/monitoring/portfolios/{portfolioId}/companies/copy');
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
        $optionsResolver->setDefined(array('copyAll'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('copyAll' => false));
        $optionsResolver->setAllowedTypes('copyAll', array('bool'));
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
     * @throws \CreditSafe\API\Exception\CopyCompaniesToAnotherPortfolioBadRequestException
     * @throws \CreditSafe\API\Exception\CopyCompaniesToAnotherPortfolioUnauthorizedException
     * @throws \CreditSafe\API\Exception\CopyCompaniesToAnotherPortfolioForbiddenException
     * @throws \CreditSafe\API\Exception\CopyCompaniesToAnotherPortfolioNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CopyCompaniesToAnotherPortfolioBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CopyCompaniesToAnotherPortfolioUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CopyCompaniesToAnotherPortfolioForbiddenException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CopyCompaniesToAnotherPortfolioNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}