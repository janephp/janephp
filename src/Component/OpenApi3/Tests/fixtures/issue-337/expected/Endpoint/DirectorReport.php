<?php

namespace CreditSafe\API\Endpoint;

class DirectorReport extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $personId;
    /**
     * 
     *
     * @param string $personId Identifier of the Person/Director required to order their Director Report. Obtained from `/people` search results.
     * @param array $queryParameters {
     *     @var string $language Report Language - The JSON structure of the Report is language invariant, but field content will return as the given language, where available.
     *     @var string $callRef Call Reference
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $personId, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->personId = $personId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{personId}'), array($this->personId), '/people/{personId}');
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
        $optionsResolver->setDefined(array('language', 'callRef'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('language' => 'en'));
        $optionsResolver->addAllowedTypes('language', array('string'));
        $optionsResolver->addAllowedTypes('callRef', array('string'));
        return $optionsResolver;
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
     * @throws \CreditSafe\API\Exception\DirectorReportBadRequestException
     * @throws \CreditSafe\API\Exception\DirectorReportUnauthorizedException
     * @throws \CreditSafe\API\Exception\DirectorReportNotFoundException
     *
     * @return null|\CreditSafe\API\Model\GbPeopleReportReponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize((string) $body, 'CreditSafe\\API\\Model\\GbPeopleReportReponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\DirectorReportBadRequestException($response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\DirectorReportUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\DirectorReportNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}