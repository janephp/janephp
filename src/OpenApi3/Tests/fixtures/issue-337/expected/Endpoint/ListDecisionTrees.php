<?php

namespace CreditSafe\API\Endpoint;

class ListDecisionTrees extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    /**
     * List available decision trees available.
     *
     * @param array $queryParameters {
     *     @var string $type Filter the list of available decision trees by the provided tree type.
     *     @var string $sortBy Sort results by this column. Null values of sort column are listed after non-nulls.
     *     @var string $sortDir 
     *     @var string $callRef Call Reference
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(array $queryParameters = array(), array $headerParameters = array())
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/decisionEngine/GUID';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('type', 'sortBy', 'sortDir', 'callRef'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('sortBy' => 'friendlyName', 'sortDir' => 'asc'));
        $optionsResolver->setAllowedTypes('type', array('string'));
        $optionsResolver->setAllowedTypes('sortBy', array('string'));
        $optionsResolver->setAllowedTypes('sortDir', array('string'));
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
     * @throws \CreditSafe\API\Exception\ListDecisionTreesBadRequestException
     * @throws \CreditSafe\API\Exception\ListDecisionTreesUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListDecisionTreesNotFoundException
     *
     * @return null|\CreditSafe\API\Model\GuidSuccessResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'CreditSafe\\API\\Model\\GuidSuccessResponse', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ListDecisionTreesBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ListDecisionTreesUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\ListDecisionTreesNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}