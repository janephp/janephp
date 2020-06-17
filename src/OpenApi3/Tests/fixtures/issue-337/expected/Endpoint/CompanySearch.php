<?php

namespace CreditSafe\API\Endpoint;

class CompanySearch extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    /**
     * Endpoint to search for Companies based on the provided Search Criteria. To get the most relevant results, it is recommended to use a unique identifer such as `regNo` where available. If a unique identiifer is not available, use a combination of the companies registered `postCode` and `name` for the next best hit rate.
     *
     * @param array $queryParameters {
     *     @var string $countries A Comma-separated list of country codes to search for Companies in. The list takes ISO/Alpha 2 format country codes. For example US,GB represents searching for Companies in the United States and Great Britain.
     *     @var string $language Search Language -  Typically only used for Countries where more than one  Company Names exist in different languages. Such as Companies with a Japanese Kanji and English names.
     *     @var string $id connectId - The primary Company identifier that is used to uniquely identify all companies across Creditsafe''s Universe and Partner Network. This is returned on all Company Search Results. Use this field to use in other operations such as Ordering Company Credit Report by Id, and Adding Company to Monitoing Portfolio. </br></br> [Searching by connectID is a slightly redundant operation (can be used as a fast-lookup to Search Result fields) as the purpose of Search is to obtain this identifier].
     *     @var string $safeNo Safe Number - Creditsafe's identifier on all Companies owned in the Creditsafe Universe. This is returned on all Company Search Results
     *     @var string $regNo Local Company Identifier - The Company identifier typically associated with a Government Filing Agency. i.e. French SIREN/SIRET, United Kingdom Companies House CRN.
     *     @var string $vatNo Company VAT Number
     *     @var string $name Company Name
     *     @var string $tradeName Trade Name of the Company, typically used in Countries where Name is not uniquely registered.
     *     @var string $acronym A (non-unique) identifier to look for Companies by their more commonly known acronym rather than their lesser known full name. Acronym is predominantly available on French Companies.
     *     @var bool $exact Provide as true to find Companies matching a Name exactly.
     *     @var string $address 
     *     @var string $street Address part identifier - Street of the Company
     *     @var string $houseNo Address part identifier - House/Building Number of the Company
     *     @var string $city Address part identifier - City of the Company
     *     @var string $postCode Address part identifier - Postcode/Zip Code of the Company. Can be provided partially to extend to a region with a * as a wildcard. I.e. CF* can represnt all postcodes starting with CF.
     *     @var string $province Address part identifier - Province/State of the Company
     *     @var string $phone Phone Number of the Company
     *     @var string $officeType Indicates whether the Company is a Head Office or a Branch
     *     @var string $status Indicates whether the Company is Active/Trading
     *     @var string $type Indicates whether the Company is Limited or NonLimited. Countries without a concept of Limited/NonLimited Companies will not be affected by this parameter
     *     @var int $page Page number
     *     @var int $pageSize Number of Companies per page
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
        return '/companies';
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
        $optionsResolver->setDefined(array('countries', 'language', 'id', 'safeNo', 'regNo', 'vatNo', 'name', 'tradeName', 'acronym', 'exact', 'address', 'street', 'houseNo', 'city', 'postCode', 'province', 'phone', 'officeType', 'status', 'type', 'page', 'pageSize', 'callRef'));
        $optionsResolver->setRequired(array('countries'));
        $optionsResolver->setDefaults(array('language' => 'en'));
        $optionsResolver->setAllowedTypes('countries', array('string'));
        $optionsResolver->setAllowedTypes('language', array('string'));
        $optionsResolver->setAllowedTypes('id', array('string'));
        $optionsResolver->setAllowedTypes('safeNo', array('string'));
        $optionsResolver->setAllowedTypes('regNo', array('string'));
        $optionsResolver->setAllowedTypes('vatNo', array('string'));
        $optionsResolver->setAllowedTypes('name', array('string'));
        $optionsResolver->setAllowedTypes('tradeName', array('string'));
        $optionsResolver->setAllowedTypes('acronym', array('string'));
        $optionsResolver->setAllowedTypes('exact', array('bool'));
        $optionsResolver->setAllowedTypes('address', array('string'));
        $optionsResolver->setAllowedTypes('street', array('string'));
        $optionsResolver->setAllowedTypes('houseNo', array('string'));
        $optionsResolver->setAllowedTypes('city', array('string'));
        $optionsResolver->setAllowedTypes('postCode', array('string'));
        $optionsResolver->setAllowedTypes('province', array('string'));
        $optionsResolver->setAllowedTypes('phone', array('string'));
        $optionsResolver->setAllowedTypes('officeType', array('string'));
        $optionsResolver->setAllowedTypes('status', array('string'));
        $optionsResolver->setAllowedTypes('type', array('string'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('pageSize', array('int'));
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
     * @throws \CreditSafe\API\Exception\CompanySearchBadRequestException
     * @throws \CreditSafe\API\Exception\CompanySearchUnauthorizedException
     * @throws \CreditSafe\API\Exception\CompanySearchForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CompanySearchBadRequestException();
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CompanySearchUnauthorizedException();
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \CreditSafe\API\Exception\CompanySearchForbiddenException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}