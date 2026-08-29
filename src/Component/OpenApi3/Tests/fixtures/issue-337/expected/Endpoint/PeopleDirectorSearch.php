<?php

namespace CreditSafe\API\Endpoint;

class PeopleDirectorSearch extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    /**
     * Endpoint to find Directors based on search criteria to order a Creditsafe Director Report.
     * @param array{
     *    "countries": string, //A comma-separated list of countries to search for People with registered directorships against. The list takes ISO/Alpha 2 format country codes. For example US,GB represents searching for People/Directorships in the United States and Great Britain.
     *    "id"?: string, //connectId - The primary Company identifier that is used to uniquely identify all companies across Creditsafe's Universe and Partner Network.
     *    "regNo"?: string, //Local Company Identifier - The Company identifier typically associated with a Government Filing Agency. i.e. French SIREN/SIRET, United Kingdom Companies House CRN
     *    "safeNumber"?: string, //Safe Number - Creditsafe's identifier on all Companies owned in the Creditsafe Universe. This is returned on all Company Search Results
     *    "peopleId"?: string, //Person/Director Identifier - used to order a Director Report.
     *    "firstName"?: string, //Person's First Name.
     *    "lastName"?: string, //Person's Last Name
     *    "companyName"?: string, //Company Name of the Director's Company (Only use this for Directorship Searches, unavailable in Director Search)
     *    "companyNumber"?: string, //Local Registration Idenitifier of the Director's Company (Only use this for Directorship Searches, unavailable in Director Search).
     *    "localDirectorNumber"?: string, //Local Identifier of the Director, the PNR in GB.
     *    "dateOfBirth"?: string, //Person DOB - provide YYYY-MM-DD or YYYY-MM format.
     *    "page"?: int, //Page number
     *    "pageSize"?: int, //Number of directors per page
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
        return '/people';
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
        $optionsResolver->setDefined(['countries', 'id', 'regNo', 'safeNumber', 'peopleId', 'firstName', 'lastName', 'companyName', 'companyNumber', 'localDirectorNumber', 'dateOfBirth', 'page', 'pageSize', 'callRef']);
        $optionsResolver->setRequired(['countries']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('countries', ['string']);
        $optionsResolver->addAllowedTypes('id', ['string']);
        $optionsResolver->addAllowedTypes('regNo', ['string']);
        $optionsResolver->addAllowedTypes('safeNumber', ['string']);
        $optionsResolver->addAllowedTypes('peopleId', ['string']);
        $optionsResolver->addAllowedTypes('firstName', ['string']);
        $optionsResolver->addAllowedTypes('lastName', ['string']);
        $optionsResolver->addAllowedTypes('companyName', ['string']);
        $optionsResolver->addAllowedTypes('companyNumber', ['string']);
        $optionsResolver->addAllowedTypes('localDirectorNumber', ['string']);
        $optionsResolver->addAllowedTypes('dateOfBirth', ['string']);
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
     * @throws \CreditSafe\API\Exception\PeopleDirectorSearchBadRequestException
     * @throws \CreditSafe\API\Exception\PeopleDirectorSearchUnauthorizedException
     * @throws \CreditSafe\API\Exception\PeopleDirectorSearchForbiddenException
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
                throw new \CreditSafe\API\Exception\PeopleDirectorSearchBadRequestException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\PeopleDirectorSearchUnauthorizedException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if (is_null($contentType) === false && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\PeopleDirectorSearchForbiddenException($response);
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