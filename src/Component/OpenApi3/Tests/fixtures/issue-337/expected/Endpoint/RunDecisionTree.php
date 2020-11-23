<?php

namespace CreditSafe\API\Endpoint;

class RunDecisionTree extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $provenirId;
    /**
     * Calls a Decision Tree with the provided parameters to return a Decision.
     *
     * @param string $provenirId Decision Tree GUID
     * @param \stdClass $requestBody 
     * @param array $queryParameters {
     *     @var string $companyId the connectId of the company to be evaluated in the  deicison tree.
     *     @var string $originationId the origin id of the company we want a decision on. Only up to 100 characters are allowed, the rest will be truncated.
     *     @var string $callRef Call Reference
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $provenirId, \stdClass $requestBody, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->provenirId = $provenirId;
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
        return str_replace(array('{provenirId}'), array($this->provenirId), '/decisionEngine/{provenirId}');
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
        $optionsResolver->setDefined(array('companyId', 'originationId', 'callRef'));
        $optionsResolver->setRequired(array('companyId'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('companyId', array('string'));
        $optionsResolver->setAllowedTypes('originationId', array('string'));
        $optionsResolver->setAllowedTypes('callRef', array('string'));
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
     * @throws \CreditSafe\API\Exception\RunDecisionTreeBadRequestException
     * @throws \CreditSafe\API\Exception\RunDecisionTreeUnauthorizedException
     * @throws \CreditSafe\API\Exception\RunDecisionTreeForbiddenException
     * @throws \CreditSafe\API\Exception\RunDecisionTreeNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\RunDecisionTreeBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\RunDecisionTreeUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\RunDecisionTreeForbiddenException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\RunDecisionTreeNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}