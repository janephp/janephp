<?php

namespace CreditSafe\API\Endpoint;

class UpdateIsProcessedFlagOnAnNotificationEvent extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $portfolioId;
    protected $notificationEventId;
    /**
     * Set a `true` or `false` flag on isProcessed for a given event
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param string $notificationEventId A unique notification event ID.
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdNotificationEventsNotificationEventIdPatchBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, string $notificationEventId, \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdNotificationEventsNotificationEventIdPatchBody $requestBody, array $headerParameters = array())
    {
        $this->portfolioId = $portfolioId;
        $this->notificationEventId = $notificationEventId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{portfolioId}', '{notificationEventId}'), array($this->portfolioId, $this->notificationEventId), '/monitoring/portfolios/{portfolioId}/notificationEvents/{notificationEventId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdNotificationEventsNotificationEventIdPatchBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
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
     * @throws \CreditSafe\API\Exception\UpdateIsProcessedFlagOnAnNotificationEventBadRequestException
     * @throws \CreditSafe\API\Exception\UpdateIsProcessedFlagOnAnNotificationEventUnauthorizedException
     * @throws \CreditSafe\API\Exception\UpdateIsProcessedFlagOnAnNotificationEventForbiddenException
     * @throws \CreditSafe\API\Exception\UpdateIsProcessedFlagOnAnNotificationEventNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (204 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\UpdateIsProcessedFlagOnAnNotificationEventBadRequestException();
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\UpdateIsProcessedFlagOnAnNotificationEventUnauthorizedException();
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\UpdateIsProcessedFlagOnAnNotificationEventForbiddenException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\UpdateIsProcessedFlagOnAnNotificationEventNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}