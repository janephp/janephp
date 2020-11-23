<?php

namespace CreditSafe\API\Endpoint;

class CompanyComplianceSearch extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $predefinedSearch;
    /**
     * Searches the provided `Predefined search` list with your search criteria. Results returned here indicate potential matches (depending on the predefined Search used).
     *
     * @param string $predefinedSearch the predefined search that the search will be made against. See the `/predefinedSearches` endpoint
     * @param array $queryParameters {
     *     @var string $countries A Comma-separated list of country codes to search for Companies in. The list takes ISO/Alpha 2 format country codes. For example US,GB represents searching for Companies in the United States and Great Britain.
     *     @var string $name Entity Name
     *     @var string $street Address part identifier - Street of the entity.
     *     @var string $houseNo Address part identifier - House/Building Number of the entity.
     *     @var string $city Address part identifier - City of the entity.
     *     @var string $postCode Address part identifier - Postcode/Zip Code of the entity.
     *     @var string $province Address part identifier - Province/State of the entity.
     *     @var string $phoneNo Phone Number of the entity.
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $predefinedSearch, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->predefinedSearch = $predefinedSearch;
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
        return str_replace(array('{predefinedSearch}'), array($this->predefinedSearch), '/compliancetemp/companies/{predefinedSearch}');
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
        $optionsResolver->setDefined(array('countries', 'name', 'street', 'houseNo', 'city', 'postCode', 'province', 'phoneNo'));
        $optionsResolver->setRequired(array('name'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('countries', array('string'));
        $optionsResolver->setAllowedTypes('name', array('string'));
        $optionsResolver->setAllowedTypes('street', array('string'));
        $optionsResolver->setAllowedTypes('houseNo', array('string'));
        $optionsResolver->setAllowedTypes('city', array('string'));
        $optionsResolver->setAllowedTypes('postCode', array('string'));
        $optionsResolver->setAllowedTypes('province', array('string'));
        $optionsResolver->setAllowedTypes('phoneNo', array('string'));
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
     * @throws \CreditSafe\API\Exception\CompanyComplianceSearchBadRequestException
     * @throws \CreditSafe\API\Exception\CompanyComplianceSearchUnauthorizedException
     * @throws \CreditSafe\API\Exception\CompanyComplianceSearchForbiddenException
     *
     * @return null|\CreditSafe\API\Model\ComplianceSearchResult
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'CreditSafe\\API\\Model\\ComplianceSearchResult', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CompanyComplianceSearchBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CompanyComplianceSearchUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CompanyComplianceSearchForbiddenException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}