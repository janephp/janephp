<?php

namespace CreditSafe\API\Endpoint;

class PeopleDirectorSearch extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    /**
     * Endpoint to find Directors based on search criteria to order a Creditsafe Director Report.
     *
     * @param array $queryParameters {
     *     @var string $countries A comma-separated list of countries to search for People with registered directorships against. The list takes ISO/Alpha 2 format country codes. For example US,GB represents searching for People/Directorships in the United States and Great Britain.
     *     @var string $id connectId - The primary Company identifier that is used to uniquely identify all companies across Creditsafe's Universe and Partner Network.
     *     @var string $regNo Local Company Identifier - The Company identifier typically associated with a Government Filing Agency. i.e. French SIREN/SIRET, United Kingdom Companies House CRN
     *     @var string $safeNumber Safe Number - Creditsafe's identifier on all Companies owned in the Creditsafe Universe. This is returned on all Company Search Results
     *     @var string $peopleId Person/Director Identifier - used to order a Director Report.
     *     @var string $firstName Person's First Name.
     *     @var string $lastName Person's Last Name
     *     @var string $companyName Company Name of the Director's Company (Only use this for Directorship Searches, unavailable in Director Search)
     *     @var string $companyNumber Local Registration Idenitifier of the Director's Company (Only use this for Directorship Searches, unavailable in Director Search).
     *     @var string $localDirectorNumber Local Identifier of the Director, the PNR in GB.
     *     @var string $dateOfBirth Person DOB - provide YYYY-MM-DD or YYYY-MM format.
     *     @var int $page Page number
     *     @var int $pageSize Number of directors per page
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
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/people';
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
        $optionsResolver->setDefined(array('countries', 'id', 'regNo', 'safeNumber', 'peopleId', 'firstName', 'lastName', 'companyName', 'companyNumber', 'localDirectorNumber', 'dateOfBirth', 'page', 'pageSize', 'callRef'));
        $optionsResolver->setRequired(array('countries'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('countries', array('string'));
        $optionsResolver->setAllowedTypes('id', array('string'));
        $optionsResolver->setAllowedTypes('regNo', array('string'));
        $optionsResolver->setAllowedTypes('safeNumber', array('string'));
        $optionsResolver->setAllowedTypes('peopleId', array('string'));
        $optionsResolver->setAllowedTypes('firstName', array('string'));
        $optionsResolver->setAllowedTypes('lastName', array('string'));
        $optionsResolver->setAllowedTypes('companyName', array('string'));
        $optionsResolver->setAllowedTypes('companyNumber', array('string'));
        $optionsResolver->setAllowedTypes('localDirectorNumber', array('string'));
        $optionsResolver->setAllowedTypes('dateOfBirth', array('string'));
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
     * @throws \CreditSafe\API\Exception\PeopleDirectorSearchBadRequestException
     * @throws \CreditSafe\API\Exception\PeopleDirectorSearchUnauthorizedException
     * @throws \CreditSafe\API\Exception\PeopleDirectorSearchForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\PeopleDirectorSearchBadRequestException();
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\PeopleDirectorSearchUnauthorizedException();
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\PeopleDirectorSearchForbiddenException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}