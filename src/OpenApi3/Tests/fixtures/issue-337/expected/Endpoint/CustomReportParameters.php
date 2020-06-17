<?php

namespace CreditSafe\API\Endpoint;

class CustomReportParameters extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $country;
    /**
     * Endpoint to return mandatory parameters or metadata associated with specific country Company Report requests. To add a custom data parameter, add a Parameter with the key=value pair in the format customData=key::allowedValue I.e. Suppling `DE` as a country code will return a list of reasons for requesting a DE Credit Report (which is a legal requirement to supply with each Credit Report request in Germany). This will provide a list of allowedValues to enter into the mandatory Parameter `customData` = `de_reason_code::allowedValue`
     *
     * @param string $country An ISO/Alpha-2 country code to display any special mandatory parameters when ordering a Credit Report in that territory.
     * @param array $queryParameters {
     *     @var string $template Report template (currently unncessary to provide.)
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $country, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->country = $country;
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
        return str_replace(array('{country}'), array($this->country), '/reportcustomdata/{country}');
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
        $optionsResolver->setDefined(array('template'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('template' => 'full'));
        $optionsResolver->setAllowedTypes('template', array('string'));
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
     * @throws \CreditSafe\API\Exception\CustomReportParametersBadRequestException
     * @throws \CreditSafe\API\Exception\CustomReportParametersUnauthorizedException
     * @throws \CreditSafe\API\Exception\CustomReportParametersForbiddenException
     * @throws \CreditSafe\API\Exception\CustomReportParametersNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CustomReportParametersBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CustomReportParametersUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CustomReportParametersForbiddenException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CustomReportParametersNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}