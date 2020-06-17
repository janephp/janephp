<?php

namespace CreditSafe\API\Endpoint;

class BankMatch extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * The Bank Verification tool allows customers to instantly verify that small and medium sized companies you are working with are providing correct bank details, to reduce fraud and avoid delays in your on boarding process. The bank data for these companies is provided to Creditsafe by various financial providers, including major banks. When you provides us with a company number and their bank details, we are able to perform instant checks to verify that those bank details are associated with that company and return - </br> • Match – We have bank information on the company, and the data provided by the customer matches this company’s records </br> • No Match – We have bank information on the company, but the data provided does not match any of the company’s records </br> • Data Unavailable – We do not have bank information on the company.
     *
     * @param array $queryParameters {
     *     @var string $checkType Validation uses an algorithm to determine if a SCAN or IBAN exists, but does not let you know if that SCAN or IBAN actually belongs to the company who has provided it. Verification takes this a step further and checks the Creditsafe database for a match on the SCAN/IBAN, and tells you if the bank details actually belong to the company, so you can be assured that you are sending your money to the correct entity.
     *     @var string $companyId The connectId or safeNumber of the company to check against.
     *     @var string $sortCode Sort Code to check - Must be passed in with Account Number to form a SCAN Result
     *     @var string $accountNumber Account Number to check - Must be passed in with Sort Code to form a SCAN Result
     *     @var string $iban IBAN to check
     *     @var string $vatNumber VAT Number to check
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
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/localSolutions/GB/bankmatch';
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
        $optionsResolver->setDefined(array('checkType', 'companyId', 'sortCode', 'accountNumber', 'iban', 'vatNumber'));
        $optionsResolver->setRequired(array('checkType', 'companyId'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('companyId', array('string'));
        $optionsResolver->setAllowedTypes('sortCode', array('string'));
        $optionsResolver->setAllowedTypes('accountNumber', array('string'));
        $optionsResolver->setAllowedTypes('iban', array('string'));
        $optionsResolver->setAllowedTypes('vatNumber', array('string'));
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
     * @throws \CreditSafe\API\Exception\BankMatchBadRequestException
     * @throws \CreditSafe\API\Exception\BankMatchUnauthorizedException
     * @throws \CreditSafe\API\Exception\BankMatchForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\BankMatchBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\BankMatchUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\BankMatchForbiddenException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}