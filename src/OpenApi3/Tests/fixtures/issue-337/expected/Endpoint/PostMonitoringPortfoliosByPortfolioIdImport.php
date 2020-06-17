<?php

namespace CreditSafe\API\Endpoint;

class PostMonitoringPortfoliosByPortfolioIdImport extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $portfolioId;
    /**
     * Import companies into a portfolio
     *
     * @param string $portfolioId 
     * @param \stdClass $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, \stdClass $requestBody, array $headerParameters = array())
    {
        $this->portfolioId = $portfolioId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{portfolioId}'), array($this->portfolioId), '/monitoring/portfolios/{portfolioId}/import');
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
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdImportBadRequestException
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdImportUnauthorizedException
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdImportForbiddenException
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdImportNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdImportBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdImportUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdImportForbiddenException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdImportNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}