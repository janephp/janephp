<?php

namespace CreditSafe\API\Endpoint;

class CompanyComplianceSearch extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $predefinedSearch;
    /**
     * Searches the provided `Predefined search` list with your search criteria. Results returned here indicate potential matches (depending on the predefined Search used).
     * @param string $predefinedSearch the predefined search that the search will be made against. See the `/predefinedSearches` endpoint
     * @param array{
     *    "countries"?: string, //A Comma-separated list of country codes to search for Companies in. The list takes ISO/Alpha 2 format country codes. For example US,GB represents searching for Companies in the United States and Great Britain.
     *    "name": string, //Entity Name
     *    "street"?: string, //Address part identifier - Street of the entity.
     *    "houseNo"?: string, //Address part identifier - House/Building Number of the entity.
     *    "city"?: string, //Address part identifier - City of the entity.
     *    "postCode"?: string, //Address part identifier - Postcode/Zip Code of the entity.
     *    "province"?: string, //Address part identifier - Province/State of the entity.
     *    "phoneNo"?: string, //Phone Number of the entity.
     * } $queryParameters
     * @param array{
     *    "Authorization": string, //Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * } $headerParameters
     */
    public function __construct(string $predefinedSearch, array $queryParameters = [], array $headerParameters = [])
    {
        $this->predefinedSearch = $predefinedSearch;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{predefinedSearch}'], [rawurlencode($this->predefinedSearch)], '/compliancetemp/companies/{predefinedSearch}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['countries', 'name', 'street', 'houseNo', 'city', 'postCode', 'province', 'phoneNo']);
        $optionsResolver->setRequired(['name']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('countries', ['string']);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('street', ['string']);
        $optionsResolver->addAllowedTypes('houseNo', ['string']);
        $optionsResolver->addAllowedTypes('city', ['string']);
        $optionsResolver->addAllowedTypes('postCode', ['string']);
        $optionsResolver->addAllowedTypes('province', ['string']);
        $optionsResolver->addAllowedTypes('phoneNo', ['string']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Authorization']);
        $optionsResolver->setRequired(['Authorization']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);
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
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CreditSafe\API\Model\ComplianceSearchResult', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\CompanyComplianceSearchBadRequestException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\CompanyComplianceSearchUnauthorizedException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if (is_null($contentType) === false && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\CompanyComplianceSearchForbiddenException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}