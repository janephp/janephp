<?php

namespace CreditSafe\API\Endpoint;

class FreshInvestigationReport extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $orderId;
    /**
     * Returns a specific Fresh Investigation order.
     *
     * @param string $orderId 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $orderId, array $headerParameters = array())
    {
        $this->orderId = $orderId;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{orderId}'), array($this->orderId), '/freshInvestigations/{orderId}');
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
     * @throws \CreditSafe\API\Exception\FreshInvestigationReportBadRequestException
     * @throws \CreditSafe\API\Exception\FreshInvestigationReportUnauthorizedException
     * @throws \CreditSafe\API\Exception\FreshInvestigationReportForbiddenException
     *
     * @return null|\CreditSafe\API\Model\CompletedFreshInvestigation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'CreditSafe\\API\\Model\\CompletedFreshInvestigation', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\FreshInvestigationReportBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\FreshInvestigationReportUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\FreshInvestigationReportForbiddenException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}