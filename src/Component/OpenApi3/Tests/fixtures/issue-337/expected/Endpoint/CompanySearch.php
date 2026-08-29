<?php

namespace CreditSafe\API\Endpoint;

class CompanySearch extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    /**
     * Endpoint to search for Companies based on the provided Search Criteria. To get the most relevant results, it is recommended to use a unique identifier such as `regNo` where available. If a unique identifier is not available, use a combination of the companies registered `postCode` and `name` for the next best hit rate.
     * @param array{
     *    "countries": string, //A Comma-separated list of country codes to search for Companies in. The list takes ISO/Alpha 2 format country codes. For example US,GB represents searching for Companies in the United States and Great Britain.
     *    "language"?: string, //Search Language -  Typically only used for Countries where more than one  Company Names exist in different languages. Such as Companies with a Japanese Kanji and English names.
     *    "id"?: string, //connectId - The primary Company identifier that is used to uniquely identify all companies across Creditsafes Universe and Partner Network. This is returned on all Company Search Results. Use this field to use in other operations such as Ordering Company Credit Report by Id, and Adding Company to Monitoing Portfolio. </br></br> [Searching by connectID is a slightly redundant operation (can be used as a fast-lookup to Search Result fields) as the purpose of Search is to obtain this identifier].
     *    "safeNo"?: string, //Safe Number - Creditsafe's identifier on all Companies owned in the Creditsafe Universe. This is returned on all Company Search Results
     *    "regNo"?: string, //Local Company Identifier - The Company identifier typically associated with a Government Filing Agency. i.e. French SIREN/SIRET, United Kingdom Companies House CRN.
     *    "vatNo"?: string, //Company VAT Number
     *    "name"?: string, //Company Name
     *    "tradeName"?: string, //Trade Name of the Company, typically used in Countries where Name is not uniquely registered.
     *    "acronym"?: string, //A (non-unique) identifier to look for Companies by their more commonly known acronym rather than their lesser known full name. Acronym is predominantly available on French Companies.
     *    "exact"?: bool, //Provide as true to find Companies matching a Name exactly.
     *    "address"?: string,
     *    "street"?: string, //Address part identifier - Street of the Company
     *    "houseNo"?: string, //Address part identifier - House/Building Number of the Company
     *    "city"?: string, //Address part identifier - City of the Company
     *    "postCode"?: string, //Address part identifier - Postcode/Zip Code of the Company. Can be provided partially to extend to a region with a * as a wildcard. I.e. CF* can represnt all postcodes starting with CF.
     *    "province"?: string, //Address part identifier - Province/State of the Company
     *    "phone"?: string, //Phone Number of the Company
     *    "officeType"?: string, //Indicates whether the Company is a Head Office or a Branch
     *    "status"?: string, //Indicates whether the Company is Active/Trading
     *    "type"?: string, //Indicates whether the Company is Limited or NonLimited. Countries without a concept of Limited/NonLimited Companies will not be affected by this parameter
     *    "page"?: int, //Page number
     *    "pageSize"?: int, //Number of Companies per page
     *    "callRef"?: string, //Call Reference
     * } $queryParameters
     * @param array{
     *    "Authorization": string, //Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * } $headerParameters
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
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
        return '/companies';
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
        $optionsResolver->setDefined(['countries', 'language', 'id', 'safeNo', 'regNo', 'vatNo', 'name', 'tradeName', 'acronym', 'exact', 'address', 'street', 'houseNo', 'city', 'postCode', 'province', 'phone', 'officeType', 'status', 'type', 'page', 'pageSize', 'callRef']);
        $optionsResolver->setRequired(['countries']);
        $optionsResolver->setDefaults(['language' => 'en']);
        $optionsResolver->addAllowedTypes('countries', ['string']);
        $optionsResolver->addAllowedTypes('language', ['string']);
        $optionsResolver->addAllowedTypes('id', ['string']);
        $optionsResolver->addAllowedTypes('safeNo', ['string']);
        $optionsResolver->addAllowedTypes('regNo', ['string']);
        $optionsResolver->addAllowedTypes('vatNo', ['string']);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('tradeName', ['string']);
        $optionsResolver->addAllowedTypes('acronym', ['string']);
        $optionsResolver->addAllowedTypes('exact', ['bool']);
        $optionsResolver->addAllowedTypes('address', ['string']);
        $optionsResolver->addAllowedTypes('street', ['string']);
        $optionsResolver->addAllowedTypes('houseNo', ['string']);
        $optionsResolver->addAllowedTypes('city', ['string']);
        $optionsResolver->addAllowedTypes('postCode', ['string']);
        $optionsResolver->addAllowedTypes('province', ['string']);
        $optionsResolver->addAllowedTypes('phone', ['string']);
        $optionsResolver->addAllowedTypes('officeType', ['string']);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('type', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('pageSize', ['int']);
        $optionsResolver->addAllowedTypes('callRef', ['string']);
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
     * @throws \CreditSafe\API\Exception\CompanySearchBadRequestException
     * @throws \CreditSafe\API\Exception\CompanySearchUnauthorizedException
     * @throws \CreditSafe\API\Exception\CompanySearchForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                return $decodedBody;
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if (is_null($contentType) === false && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\CompanySearchBadRequestException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\CompanySearchUnauthorizedException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if (is_null($contentType) === false && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\CompanySearchForbiddenException($response);
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