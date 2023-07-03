<?php

namespace CreditSafe\API\Endpoint;

class ListPortfolioEventRules extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $portfolioId;
    /**
     * Get all notification `eventRules` for the given `portfolioId`. Notification event rules allow you to control which events you wish to monitor for the `companies` contained within the given `portfolio`.
     *
     * @param string $portfolioId The unique identifier for the portfolio that you wish to retrieve notification event rules for, obtained from `/portfolios`.
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, array $headerParameters = array())
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
        return str_replace(array('{portfolioId}'), array($this->portfolioId), '/monitoring/portfolios/{portfolioId}/eventRules');
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
        $optionsResolver->addAllowedTypes('Authorization', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \CreditSafe\API\Exception\ListPortfolioEventRulesBadRequestException
     * @throws \CreditSafe\API\Exception\ListPortfolioEventRulesUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListPortfolioEventRulesForbiddenException
     * @throws \CreditSafe\API\Exception\ListPortfolioEventRulesNotFoundException
     *
     * @return null|\CreditSafe\API\Model\EventRulesResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize((string) $body, 'CreditSafe\\API\\Model\\EventRulesResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\ListPortfolioEventRulesBadRequestException($serializer->deserialize((string) $body, 'CreditSafe\\API\\Model\\BadRequestError', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\ListPortfolioEventRulesUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\ListPortfolioEventRulesForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\ListPortfolioEventRulesNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}