<?php

namespace CreditSafe\API\Endpoint;

class CompanyCreditReport extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $id;
    /**
     * Orders a Company's Credit Report by connectId. Set the content-type of the request to `application\pdf` to receive a PDF of the report instead of JSON.
     *
     * @param string $id The connectId (optionally Safe Number where available) of the Company required to order their Credit Report. Obtained from `/companies` search results.
     * @param array $queryParameters {
     *     @var string $language Report Language - The JSON structure of the Report is language invariant, but field content will return as the given language, where available.
     *     @var string $template Optional parameter to request a Templated Company Report. A Template adds/reduces sections of the Credit Report depending on your subscription. Do not include this parameter if you have not been given a template to use.
     *     @var string $customData A Key-Value pair (as a string format key::value) that is required for certain Report requests. I.e. German Report Reason Code. Use /reportcustomdata/{country} endpoint to see the necessary structure/values.
     *     @var string $callRef Call Reference
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $id, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->id = $id;
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
        return str_replace(array('{id}'), array($this->id), '/companies/{id}');
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
        $optionsResolver->setDefined(array('language', 'template', 'customData', 'callRef'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('language' => 'en', 'template' => 'full'));
        $optionsResolver->setAllowedTypes('language', array('string'));
        $optionsResolver->setAllowedTypes('template', array('string'));
        $optionsResolver->setAllowedTypes('customData', array('string'));
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
     * @throws \CreditSafe\API\Exception\CompanyCreditReportBadRequestException
     * @throws \CreditSafe\API\Exception\CompanyCreditReportUnauthorizedException
     * @throws \CreditSafe\API\Exception\CompanyCreditReportForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CompanyCreditReportBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CompanyCreditReportUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CompanyCreditReportForbiddenException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}