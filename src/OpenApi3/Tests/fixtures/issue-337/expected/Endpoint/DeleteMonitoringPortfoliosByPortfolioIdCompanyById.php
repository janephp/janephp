<?php

namespace CreditSafe\API\Endpoint;

class DeleteMonitoringPortfoliosByPortfolioIdCompanyById extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $portfolioId;
    protected $id;
    /**
     * Delete a Company
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param string $id A company Safe Number or Connect ID.
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
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
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
     * @throws \CreditSafe\API\Exception\DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdBadRequestException
     * @throws \CreditSafe\API\Exception\DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdUnauthorizedException
     * @throws \CreditSafe\API\Exception\DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdForbiddenException
     * @throws \CreditSafe\API\Exception\DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdForbiddenException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}