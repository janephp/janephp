<?php

namespace CreditSafe\API\Endpoint;

class ListSubmittedFreshInvestigations extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    /**
     * Returns a list of your submitted Fresh Investigation Orders.
     * @param array{
     *    "page"?: int, //Starting page number (indexed from 0)
     *    "pageSize"?: int, //Number of items to return per Page (max 1000)
     *    "transactionId"?: string, //Fresh Investigation Identifier used internally and with our data partners.
     *    "reportCreatedAfter"?: string, //Returns Fresh Investigations processed after this date
     *    "reportCreatedBefore"?: string, //Returns ordered Fresh Investigations that were processed before this date
     *    "createdBefore"?: string, //Returns Fresh Investigations created before this date
     *    "createdSince"?: string, //Returns ordered Fresh Investigations created after this date
     *    "lookUpOrderBy"?: string, //Use to search for your Fresh Investigations by either the returned Company Details in the `GET` `freshInvestigations/{orderId}` endpoint or your supplied Search Criteria in the `POST` `/freshInvestigations` endpoint
     *    "companyDetailsCountry"?: string, //Looks for your returned Fresh Investigations where the returned Company Country is named this. Use with lookUpOrderBy=CompanyDetails
     *    "companyDetailsName"?: string, //Looks for your returned Fresh Investigations where the returned Company Name is named this. Use with lookUpOrderBy=CompanyDetails
     *    "searchCriteriaCountry"?: string, //Looks for your returned Fresh Investigations where your submitted Search Criteria Company Country is this. Use with lookUpOrderBy=searchCriteria
     *    "searchCriteriaName"?: string, //Looks for your Fresh Investigations where your submitted Search Criteria Company Name is this. Use with lookUpOrderBy=searchCriteria
     *    "sortBy"?: string, //Sorts  returned Fresh Investigations by this field
     *    "sortDir"?: string, //Sorts returned Fresh Investigations by this direction
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
        return '/freshInvestigations';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
        $optionsResolver->setDefined(['page', 'pageSize', 'transactionId', 'reportCreatedAfter', 'reportCreatedBefore', 'createdBefore', 'createdSince', 'lookUpOrderBy', 'companyDetailsCountry', 'companyDetailsName', 'searchCriteriaCountry', 'searchCriteriaName', 'sortBy', 'sortDir']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 0, 'pageSize' => 50]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('pageSize', ['int']);
        $optionsResolver->addAllowedTypes('transactionId', ['string']);
        $optionsResolver->addAllowedTypes('reportCreatedAfter', ['string']);
        $optionsResolver->addAllowedTypes('reportCreatedBefore', ['string']);
        $optionsResolver->addAllowedTypes('createdBefore', ['string']);
        $optionsResolver->addAllowedTypes('createdSince', ['string']);
        $optionsResolver->addAllowedTypes('lookUpOrderBy', ['string']);
        $optionsResolver->addAllowedTypes('companyDetailsCountry', ['string']);
        $optionsResolver->addAllowedTypes('companyDetailsName', ['string']);
        $optionsResolver->addAllowedTypes('searchCriteriaCountry', ['string']);
        $optionsResolver->addAllowedTypes('searchCriteriaName', ['string']);
        $optionsResolver->addAllowedTypes('sortBy', ['string']);
        $optionsResolver->addAllowedTypes('sortDir', ['string']);
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
     * @throws \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsBadRequestException
     * @throws \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsForbiddenException
     * @throws \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsNotFoundException
     *
     * @return null|\CreditSafe\API\Model\ListFreshInvestigationResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CreditSafe\API\Model\ListFreshInvestigationResponse', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsBadRequestException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsUnauthorizedException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsForbiddenException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsNotFoundException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}