<?php

namespace CreditSafe\API;

class Client extends \Jane\OpenApiRuntime\Client\Client
{
    /**
     * Enter your username and password into the request schema to generate an Authorization Token
     *
     * @param \CreditSafe\API\Model\AuthenticationRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\GenerateAuthenticationTokenUnauthorizedException
     * @throws \CreditSafe\API\Exception\GenerateAuthenticationTokenNotFoundException
     *
     * @return null|\CreditSafe\API\Model\AuthenticationSuccessResponse|\Psr\Http\Message\ResponseInterface
     */
    public function generateAuthenticationToken(\CreditSafe\API\Model\AuthenticationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\GenerateAuthenticationToken($requestBody), $fetch);
    }
    /**
     * Endpoint to search for Companies based on the provided Search Criteria. To get the most relevant results, it is recommended to use a unique identifier such as `regNo` where available. If a unique identifier is not available, use a combination of the companies registered `postCode` and `name` for the next best hit rate.
     *
     * @param array $queryParameters {
     *     @var string $countries A Comma-separated list of country codes to search for Companies in. The list takes ISO/Alpha 2 format country codes. For example US,GB represents searching for Companies in the United States and Great Britain.
     *     @var string $language Search Language -  Typically only used for Countries where more than one  Company Names exist in different languages. Such as Companies with a Japanese Kanji and English names.
     *     @var string $id connectId - The primary Company identifier that is used to uniquely identify all companies across Creditsafes Universe and Partner Network. This is returned on all Company Search Results. Use this field to use in other operations such as Ordering Company Credit Report by Id, and Adding Company to Monitoing Portfolio. </br></br> [Searching by connectID is a slightly redundant operation (can be used as a fast-lookup to Search Result fields) as the purpose of Search is to obtain this identifier].
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\CompanySearchBadRequestException
     * @throws \CreditSafe\API\Exception\CompanySearchUnauthorizedException
     * @throws \CreditSafe\API\Exception\CompanySearchForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companySearch(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\CompanySearch($queryParameters, $headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\CompanyCreditReportBadRequestException
     * @throws \CreditSafe\API\Exception\CompanyCreditReportUnauthorizedException
     * @throws \CreditSafe\API\Exception\CompanyCreditReportForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditReport(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\CompanyCreditReport($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the set of available Company Search parameters/fields for a provided list of countries.
     *
     * @param array $queryParameters {
     *     @var string $countries A comma separated list of ISO/Alpha 2 format country codes, or singular country Code. e.g. US,GB will return the common searchable Company fields in the United States and Great Britain.
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\CompanySearchCriteriaBadRequestException
     * @throws \CreditSafe\API\Exception\CompanySearchCriteriaUnauthorizedException
     * @throws \CreditSafe\API\Exception\CompanySearchCriteriaForbiddenException
     * @throws \CreditSafe\API\Exception\CompanySearchCriteriaNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companySearchCriteria(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\CompanySearchCriteria($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the JSON schema of the companies/{connectId} endpoint for implementation in strong-typed languages.
     *
     * @param string $countryCode ISO2 / Alpha 2 Country Code
     * @param array $queryParameters {
     *     @var string $section Use CompanyReportResponse for the Company Credit Report JSON schema, DirectorReportResponse for the Director Report JSON schema.
     *     @var string $template For Templated Company Report JSON Schemas
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\CompanyReportJSONSchemaUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyReportJSONSchema(string $countryCode, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\CompanyReportJSONSchema($countryCode, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the available countries in your subscription by operation - Company Report, Director Report, Offline Reports and Monitoring.
     *
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\CountriesInSubscriptionBadRequestException
     * @throws \CreditSafe\API\Exception\CountriesInSubscriptionUnauthorizedException
     *
     * @return null|\CreditSafe\API\Model\AccessCountriesResponse|\Psr\Http\Message\ResponseInterface
     */
    public function countriesInSubscription(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\CountriesInSubscription($headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\PeopleDirectorSearchBadRequestException
     * @throws \CreditSafe\API\Exception\PeopleDirectorSearchUnauthorizedException
     * @throws \CreditSafe\API\Exception\PeopleDirectorSearchForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function people/DirectorSearch(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\PeopleDirectorSearch($queryParameters, $headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\DirectorReportBadRequestException
     * @throws \CreditSafe\API\Exception\DirectorReportUnauthorizedException
     * @throws \CreditSafe\API\Exception\DirectorReportNotFoundException
     *
     * @return null|\CreditSafe\API\Model\GbPeopleReportReponse|\Psr\Http\Message\ResponseInterface
     */
    public function directorReport(string $personId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\DirectorReport($personId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the set of available People Search parameters/fields for a provided list of countries.
     *
     * @param array $queryParameters {
     *     @var string $countries A comma separated list of ISO/Alpha 2 format country codes, or singular country Code. e.g. US,GB will return the common searchable People/Director fields in the United States and Great Britain.
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\PeopleDirectorSearchCriteriaBadRequestException
     * @throws \CreditSafe\API\Exception\PeopleDirectorSearchCriteriaUnauthorizedException
     * @throws \CreditSafe\API\Exception\PeopleDirectorSearchCriteriaForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function people/DirectorSearchCriteria(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\PeopleDirectorSearchCriteria($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the available Images for a given Company connectId.
     *
     * @param array $queryParameters {
     *     @var string $Id The company's connectId.
     *     @var string $olderThan Returns Images older than this date. Use with newerThan parameter.
     *     @var string $newerThan Returns Images newer than this date. Use with olderThan parameter.
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\CompanyImageDocumentsUnauthorizedException
     * @throws \CreditSafe\API\Exception\CompanyImageDocumentsNotFoundException
     *
     * @return null|\CreditSafe\API\Model\ListCompanyImages|\Psr\Http\Message\ResponseInterface
     */
    public function companyImageDocuments(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\CompanyImageDocuments($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the type of Image that can be returned by for additional meta data.
     *
     * @param array $queryParameters {
     *     @var string $countries Filter Images by country.
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\ImageDocumentCategoryTypesUnauthorizedException
     * @throws \CreditSafe\API\Exception\ImageDocumentCategoryTypesNotFoundException
     *
     * @return null|\CreditSafe\API\Model\GbImageTypesResponse|\Psr\Http\Message\ResponseInterface
     */
    public function imageDocumentCategoryTypes(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\ImageDocumentCategoryTypes($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Endpoint to order an Image Document by Image ID.
     *
     * @param string $imageId Image ID retrieved from `images/companies`
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\CompanyImageBadRequestException
     * @throws \CreditSafe\API\Exception\CompanyImageForbiddenException
     * @throws \CreditSafe\API\Exception\CompanyImageNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyImage(string $imageId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\CompanyImage($imageId, $headerParameters), $fetch);
    }
    /**
     * Returns a list of your submitted Fresh Investigation Orders.
     *
     * @param array $queryParameters {
     *     @var int $page Starting page number (indexed from 0)
     *     @var int $pageSize Number of items to return per Page (max 1000)
     *     @var string $transactionId Fresh Investigation Identifier used internally and with our data partners.
     *     @var string $reportCreatedAfter Returns Fresh Investigations processed after this date
     *     @var string $reportCreatedBefore Returns ordered Fresh Investigations that were processed before this date
     *     @var string $createdBefore Returns Fresh Investigations created before this date
     *     @var string $createdSince Returns ordered Fresh Investigations created after this date
     *     @var string $lookUpOrderBy Use to search for your Fresh Investigations by either the returned Company Details in the `GET` `freshInvestigations/{orderId}` endpoint or your supplied Search Criteria in the `POST` `/freshInvestigations` endpoint
     *     @var string $companyDetailsCountry Looks for your returned Fresh Investigations where the returned Company Country is named this. Use with lookUpOrderBy=CompanyDetails
     *     @var string $companyDetailsName Looks for your returned Fresh Investigations where the returned Company Name is named this. Use with lookUpOrderBy=CompanyDetails
     *     @var string $searchCriteriaCountry Looks for your returned Fresh Investigations where your submitted Search Criteria Company Country is this. Use with lookUpOrderBy=searchCriteria
     *     @var string $searchCriteriaName Looks for your Fresh Investigations where your submitted Search Criteria Company Name is this. Use with lookUpOrderBy=searchCriteria
     *     @var string $sortBy Sorts  returned Fresh Investigations by this field
     *     @var string $sortDir Sorts returned Fresh Investigations by this direction
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsBadRequestException
     * @throws \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsForbiddenException
     * @throws \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsNotFoundException
     *
     * @return null|\CreditSafe\API\Model\ListFreshInvestigationResponse|\Psr\Http\Message\ResponseInterface
     */
    public function listSubmittedFreshInvestigations(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\ListSubmittedFreshInvestigations($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Places an order for a Fresh Investigation (Offline Report). Providing as much detail as possible about the Company, our team will use official sources and registries to quickly answer questions about a company’s stability and financial health. Fresh Investigations take 5.5 days on average to complete.
     *
     * @param \CreditSafe\API\Model\CreateFreshInvestigationRequest $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\RequestFreshInvestigationBadRequestException
     * @throws \CreditSafe\API\Exception\RequestFreshInvestigationUnauthorizedException
     * @throws \CreditSafe\API\Exception\RequestFreshInvestigationForbiddenException
     * @throws \CreditSafe\API\Exception\RequestFreshInvestigationNotFoundException
     *
     * @return null|\CreditSafe\API\Model\SubmittedFreshInvestigationRepsonse|\Psr\Http\Message\ResponseInterface
     */
    public function requestFreshInvestigation(\CreditSafe\API\Model\CreateFreshInvestigationRequest $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\RequestFreshInvestigation($requestBody, $headerParameters), $fetch);
    }
    /**
     * Currently depreciated as the order may already be in progress with our investigation team. To delete an ongoing Fresh Investigation, please get in touch with us at Group.Help@creditsafe.com quoting the `Transaction Id` against the order in `/freshinvestigations/{orderId}`
     *
     * @param string $orderId 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\DeletePendingFreshInvesitgationBadRequestException
     * @throws \CreditSafe\API\Exception\DeletePendingFreshInvesitgationUnauthorizedException
     * @throws \CreditSafe\API\Exception\DeletePendingFreshInvesitgationForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deletePendingFreshInvesitgation(string $orderId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\DeletePendingFreshInvesitgation($orderId, $headerParameters), $fetch);
    }
    /**
     * Returns a specific Fresh Investigation order.
     *
     * @param string $orderId 
     * @param array $queryParameters {
     *     @var string $sections Specify a value to return a single section, or multiple-comma separated sections of the completed Fresh Investigation. Leave null to return the full report. Available sections; - companyIdentification - creditScore - contactInformation - directors - otherInformation - groupStructure - extendedGroupStructure - financialStatements - negativeInformation - additionalInformation - directorships - localFinancialStatements - paymentData - companySummary - alternateSummary
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\FreshInvestigationReportBadRequestException
     * @throws \CreditSafe\API\Exception\FreshInvestigationReportUnauthorizedException
     * @throws \CreditSafe\API\Exception\FreshInvestigationReportForbiddenException
     *
     * @return null|\CreditSafe\API\Model\CompletedFreshInvestigation|\Psr\Http\Message\ResponseInterface
     */
    public function freshInvestigationReport(string $orderId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\FreshInvestigationReport($orderId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Currently depreciated as the order may already be in progress with our investigation team. To edit an ongoing Fresh Investigation, please get in touch with us at Group.Help@creditsafe.com quoting the `Transaction Id` against the order in `/freshinvestigations/{orderId}`
     *
     * @param string $orderId 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\EditPendingFreshInvestigationBadRequestException
     * @throws \CreditSafe\API\Exception\EditPendingFreshInvestigationUnauthorizedException
     * @throws \CreditSafe\API\Exception\EditPendingFreshInvestigationForbiddenException
     * @throws \CreditSafe\API\Exception\EditPendingFreshInvestigationNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function editPendingFreshInvestigation(string $orderId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\EditPendingFreshInvestigation($orderId, $headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\BankMatchBadRequestException
     * @throws \CreditSafe\API\Exception\BankMatchUnauthorizedException
     * @throws \CreditSafe\API\Exception\BankMatchForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function bankMatch(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\BankMatch($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Endpoint to return all user details relating to the Global Monitoring product.
     *
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\CreditSafe\API\Model\UserDetails|\Psr\Http\Message\ResponseInterface
     */
    public function monitoringUserDetails(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\MonitoringUserDetails($headerParameters), $fetch);
    }
    /**
     * Endpoint to return a collection of `events` for the given company, optionally filtered on the supplied search criteria. Event information will only be returned if the company exists in at least one of your `portfolios`.
     *
     * @param string $id The connectId of the company that you wish to retrieve events for.
     * @param array $queryParameters {
     *     @var string $startDate The start date on which results are filtered.
     *     @var string $endDate The end date on which results are filtered.
     *     @var int $page Starting page number (indexed from 0)
     *     @var int $pageSize Number of items to return per Page (max 1000)
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\CompanyEventsBadRequestException
     * @throws \CreditSafe\API\Exception\CompanyEventsUnauthorizedException
     * @throws \CreditSafe\API\Exception\CompanyEventsForbiddenException
     * @throws \CreditSafe\API\Exception\CompanyEventsNotFoundException
     *
     * @return null|\CreditSafe\API\Model\CompanyEventsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyEvents(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\CompanyEvents($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get all available notification event rules. Notification event rules allow you to control which events you wish to monitor for the `companies` contained within a given `portfolio`.
     *
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\AllEventRulesBadRequestException
     * @throws \CreditSafe\API\Exception\AllEventRulesUnauthorizedException
     * @throws \CreditSafe\API\Exception\AllEventRulesForbiddenException
     * @throws \CreditSafe\API\Exception\AllEventRulesNotFoundException
     *
     * @return null|\CreditSafe\API\Model\EventRulesResponse|\Psr\Http\Message\ResponseInterface
     */
    public function allEventRules(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\AllEventRules($headerParameters), $fetch);
    }
    /**
     * Get all available notification event rules for the given `countryCode`. Notification event rules allow you to control which events you wish to monitor for the `companies` contained within a given `portfolio`.
     *
     * @param string $countryCode ISO/Alpha 2 format country code for which notification event rules will be retured.
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\FilteredEventRulesBadRequestException
     * @throws \CreditSafe\API\Exception\FilteredEventRulesForbiddenException
     * @throws \CreditSafe\API\Exception\FilteredEventRulesNotFoundException
     *
     * @return null|\CreditSafe\API\Model\EventRulesResponse|\Psr\Http\Message\ResponseInterface
     */
    public function filteredEventRules(string $countryCode, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\FilteredEventRules($countryCode, $headerParameters), $fetch);
    }
    /**
     * Get all notification events generated for companies monitored in your portfolios, based on the notification rules enabled. The notification events returned will be filtered based upon the supplied search criteria.
     *
     * @param array $queryParameters {
     *     @var string $searchQuery Return notificationEvents that match the given value
     *     @var string $sortBy Sort results by this column. Null values of sort column are listed after non-nulls.
     *     @var string $sortDir The direction that you wish to sort results by.
     *     @var string $startDate The start date on which results are filtered.
     *     @var string $endDate The end date on which results are filtered.
     *     @var int $page Starting page number (indexed from 0)
     *     @var int $pageSize Number of items to return per Page (max 1000)
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\NotificationEventsBadRequestException
     * @throws \CreditSafe\API\Exception\NotificationEventsUnauthorizedException
     * @throws \CreditSafe\API\Exception\NotificationEventsForbiddenException
     * @throws \CreditSafe\API\Exception\NotificationEventsNotFoundException
     *
     * @return null|\CreditSafe\API\Model\NotificationEventsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function notificationEvents(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\NotificationEvents($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Endpoint to get all Portfolios based on the supplied Search Criteria.
     *
     * @param array $queryParameters {
     *     @var string $searchQuery Return portfolios that match the given value
     *     @var int $page Starting page number (indexed from 0).
     *     @var int $pageSize Number of items to return per Page (max 1000).
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\ListAllPortfoliosBadRequestException
     * @throws \CreditSafe\API\Exception\ListAllPortfoliosUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListAllPortfoliosForbiddenException
     * @throws \CreditSafe\API\Exception\ListAllPortfoliosNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listAllPortfolios(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\ListAllPortfolios($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Endpoint to create a new Portfolio based on the supplied criteria. A portfolio can contain any number of `companies` that you wish to monitor changes to.
     *
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\CreateMonitoringPortfolioBadRequestException
     * @throws \CreditSafe\API\Exception\CreateMonitoringPortfolioUnauthorizedException
     * @throws \CreditSafe\API\Exception\CreateMonitoringPortfolioForbiddenException
     * @throws \CreditSafe\API\Exception\CreateMonitoringPortfolioNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createMonitoringPortfolio(\CreditSafe\API\Model\MonitoringPortfoliosPostBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\CreateMonitoringPortfolio($requestBody, $headerParameters), $fetch);
    }
    /**
     * Delete the portfolio with portfolioId
     *
     * @param string $portfolioId The unique identifier of the portfolio that you wish to delete, obtained from `/portfolios`.
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\DeleteMonitoringPortfolioByPortfolioIdBadRequestException
     * @throws \CreditSafe\API\Exception\DeleteMonitoringPortfolioByPortfolioIdUnauthorizedException
     * @throws \CreditSafe\API\Exception\DeleteMonitoringPortfolioByPortfolioIdForbiddenException
     * @throws \CreditSafe\API\Exception\DeleteMonitoringPortfolioByPortfolioIdNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMonitoringPortfolioByPortfolioId(string $portfolioId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\DeleteMonitoringPortfolioByPortfolioId($portfolioId, $headerParameters), $fetch);
    }
    /**
     * Get the portfolio with portfolioId
     *
     * @param string $portfolioId The unique identifier for the portfolio that you wish to retrieve, obtained from `/portfolios`.
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\RetrievePortfolioByIdBadRequestException
     * @throws \CreditSafe\API\Exception\RetrievePortfolioByIdUnauthorizedException
     * @throws \CreditSafe\API\Exception\RetrievePortfolioByIdForbiddenException
     * @throws \CreditSafe\API\Exception\RetrievePortfolioByIdNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function retrievePortfolioById(string $portfolioId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\RetrievePortfolioById($portfolioId, $headerParameters), $fetch);
    }
    /**
     * Update Portfolio details such as Name, email reciepients, language and subject line.
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdPatchBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\UpdatePortfolioDetailsBadRequestException
     * @throws \CreditSafe\API\Exception\UpdatePortfolioDetailsForbiddenException
     * @throws \CreditSafe\API\Exception\UpdatePortfolioDetailsNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updatePortfolioDetails(string $portfolioId, \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdPatchBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\UpdatePortfolioDetails($portfolioId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Get a list of distinct countries of companies monitored within a portfolio.
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\ListCountriesOfMonitoredCompaniesBadRequestException
     * @throws \CreditSafe\API\Exception\ListCountriesOfMonitoredCompaniesUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListCountriesOfMonitoredCompaniesForbiddenException
     * @throws \CreditSafe\API\Exception\ListCountriesOfMonitoredCompaniesNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listCountriesOfMonitoredCompanies(string $portfolioId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\ListCountriesOfMonitoredCompanies($portfolioId, $headerParameters), $fetch);
    }
    /**
     * Get all notification `eventRules` for the given `portfolioId`. Notification event rules allow you to control which events you wish to monitor for the `companies` contained within the given `portfolio`.
     *
     * @param string $portfolioId The unique identifier for the portfolio that you wish to retrieve notification event rules for, obtained from `/portfolios`.
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\ListPortfolioEventRulesBadRequestException
     * @throws \CreditSafe\API\Exception\ListPortfolioEventRulesUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListPortfolioEventRulesForbiddenException
     * @throws \CreditSafe\API\Exception\ListPortfolioEventRulesNotFoundException
     *
     * @return null|\CreditSafe\API\Model\EventRulesResponse|\Psr\Http\Message\ResponseInterface
     */
    public function listPortfolioEventRules(string $portfolioId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\ListPortfolioEventRules($portfolioId, $headerParameters), $fetch);
    }
    /**
     * Get all eventRules, optionally filtered by country code
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param string $countryCode Country code to show events for.
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\GetFilteredPortfolioEventRulesBadRequestException
     * @throws \CreditSafe\API\Exception\GetFilteredPortfolioEventRulesUnauthorizedException
     * @throws \CreditSafe\API\Exception\GetFilteredPortfolioEventRulesForbiddenException
     * @throws \CreditSafe\API\Exception\GetFilteredPortfolioEventRulesNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getFilteredPortfolioEventRules(string $portfolioId, string $countryCode, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\GetFilteredPortfolioEventRules($portfolioId, $countryCode, $headerParameters), $fetch);
    }
    /**
     * Update eventRules for a portfolio
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param string $countryCode Country code to show events for
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem[] $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeBadRequestException
     * @throws \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeUnauthorizedException
     * @throws \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeForbiddenException
     * @throws \CreditSafe\API\Exception\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putMonitoringPortfoliosByPortfolioIdEventRuleByCountryCode(string $portfolioId, string $countryCode, array $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCode($portfolioId, $countryCode, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Update a portofolios event rules to default state. In Connect, default state means all rules are turned off.
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\ResetPortfolioEventRulesToDefaultValuesBadRequestException
     * @throws \CreditSafe\API\Exception\ResetPortfolioEventRulesToDefaultValuesUnauthorizedException
     * @throws \CreditSafe\API\Exception\ResetPortfolioEventRulesToDefaultValuesForbiddenException
     * @throws \CreditSafe\API\Exception\ResetPortfolioEventRulesToDefaultValuesNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function resetPortfolioEventRulesToDefaultValues(string $portfolioId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\ResetPortfolioEventRulesToDefaultValues($portfolioId, $headerParameters), $fetch);
    }
    /**
     * Import companies into a portfolio using .csv, .xls or .xlsx file. Additionally provide an email address to get notified when the import process is done.
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdImportPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdImportBadRequestException
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdImportUnauthorizedException
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdImportForbiddenException
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdImportNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postMonitoringPortfoliosByPortfolioIdImport(string $portfolioId, \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdImportPostBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\PostMonitoringPortfoliosByPortfolioIdImport($portfolioId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Delete companies from portfolio and update new companies from CSV file
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdSyncPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\SyncPortfolioCompaniesToCSVRecordsBadRequestException
     * @throws \CreditSafe\API\Exception\SyncPortfolioCompaniesToCSVRecordsUnauthorizedException
     * @throws \CreditSafe\API\Exception\SyncPortfolioCompaniesToCSVRecordsForbiddenException
     * @throws \CreditSafe\API\Exception\SyncPortfolioCompaniesToCSVRecordsNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function syncPortfolioCompaniesToCSVRecords(string $portfolioId, \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdSyncPostBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\SyncPortfolioCompaniesToCSVRecords($portfolioId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Get current portfolio risk summary information
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\PortoflioRiskSummaryBadRequestException
     * @throws \CreditSafe\API\Exception\PortoflioRiskSummaryUnauthorizedException
     * @throws \CreditSafe\API\Exception\PortoflioRiskSummaryForbiddenException
     * @throws \CreditSafe\API\Exception\PortoflioRiskSummaryNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function portoflioRiskSummary(string $portfolioId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\PortoflioRiskSummary($portfolioId, $headerParameters), $fetch);
    }
    /**
     * Get all notificationEvents based on the portfolio id, optionally filter with query parameters
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param array $queryParameters {
     *     @var string $searchQuery Return notificationEvents that match the given value
     *     @var string $sortDir 
     *     @var int $pageSize Number of items to return per Page (max 1000)
     *     @var int $page Starting page number (indexed from 0)
     *     @var string $sortBy Sort results by this column. Null values of sort column are listed after non-nulls.
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredBadRequestException
     * @throws \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredForbiddenException
     * @throws \CreditSafe\API\Exception\ListNotificationEventsInAPortfolioFilteredNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listNotificationEventsInAPortfolioFiltered(string $portfolioId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\ListNotificationEventsInAPortfolioFiltered($portfolioId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Set a `true` or `false` flag on isProcessed for a given event
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param string $notificationEventId A unique notification event ID.
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdNotificationEventsNotificationEventIdPatchBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\UpdateIsProcessedFlagOnAnNotificationEventBadRequestException
     * @throws \CreditSafe\API\Exception\UpdateIsProcessedFlagOnAnNotificationEventUnauthorizedException
     * @throws \CreditSafe\API\Exception\UpdateIsProcessedFlagOnAnNotificationEventForbiddenException
     * @throws \CreditSafe\API\Exception\UpdateIsProcessedFlagOnAnNotificationEventNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateIsProcessedFlagOnAnNotificationEvent(string $portfolioId, string $notificationEventId, \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdNotificationEventsNotificationEventIdPatchBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\UpdateIsProcessedFlagOnAnNotificationEvent($portfolioId, $notificationEventId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Get all companies from a specific portfolio based on the portfolio id, optionally filter with query parameters
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param array $queryParameters {
     *     @var string $searchQuery Return companies that match the given value
     *     @var int $pageSize Number of items to return per Page (max 1000)
     *     @var int $page Starting page number (indexed from 0)
     *     @var string $countryCode Return <<resourcePathName>> that match the given countryCode
     *     @var bool $events If set to true, all events will be returned for each company
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\ListFilteredCompaniesInAPortfolioBadRequestException
     * @throws \CreditSafe\API\Exception\ListFilteredCompaniesInAPortfolioUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListFilteredCompaniesInAPortfolioForbiddenException
     * @throws \CreditSafe\API\Exception\ListFilteredCompaniesInAPortfolioNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listFilteredCompaniesInAPortfolio(string $portfolioId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\ListFilteredCompaniesInAPortfolio($portfolioId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Add new company to portfolio
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdCompanyBadRequestException
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdCompanyUnauthorizedException
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdCompanyForbiddenException
     * @throws \CreditSafe\API\Exception\PostMonitoringPortfoliosByPortfolioIdCompanyNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postMonitoringPortfoliosByPortfolioIdCompany(string $portfolioId, \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesPostBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\PostMonitoringPortfoliosByPortfolioIdCompany($portfolioId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Copy companies from one portfolio to single (or) multiple portfolios.
     *
     * @param string $portfolioId The unique identifier of the portfolio you want to copy companies from, obtained from `/portfolios`.
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBody $requestBody 
     * @param array $queryParameters {
     *     @var bool $copyAll When CopyAll queryparameter is False, portfolios and companies list needs to be passed. When CopyAll queryparameter is True, only portfolios need to be passed and companies List must be empty. All companies are copied from current portfolio are considered here.
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\CopyCompaniesFromOneToAnotherPortfolioSBadRequestException
     * @throws \CreditSafe\API\Exception\CopyCompaniesFromOneToAnotherPortfolioSUnauthorizedException
     * @throws \CreditSafe\API\Exception\CopyCompaniesFromOneToAnotherPortfolioSForbiddenException
     * @throws \CreditSafe\API\Exception\CopyCompaniesFromOneToAnotherPortfolioSNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function copyCompaniesFromOneToAnotherPortfolio(s)(string $portfolioId, \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBody $requestBody, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\CopyCompaniesFromOneToAnotherPortfolioS($portfolioId, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Move companies from one portfolio to single (or) multiple portfolios.
     *
     * @param string $portfolioId The unique identifier of the portfolio you want to move companies from, obtained from `/portfolios`.
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody $requestBody 
     * @param array $queryParameters {
     *     @var bool $removeAll When RemoveAll queryparameter is False, portfolios and companies List needs to be passed. When RemoveAll queryparameter is True, only portfolios need to be passed and companies List must be empty. All companies are moved and deleted from current portfolio
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSBadRequestException
     * @throws \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSUnauthorizedException
     * @throws \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSForbiddenException
     * @throws \CreditSafe\API\Exception\MoveCompaniesFromOneToAnotherPortfolioSNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function moveCompaniesFromOneToAnotherPortfolio(s)(string $portfolioId, \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody $requestBody, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\MoveCompaniesFromOneToAnotherPortfolioS($portfolioId, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Delete companies from current portfolio
     *
     * @param string $portfolioId The unique identifier of the portfolio you want to delete companies from, obtained from `/portfolios`.
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesClearPatchBody $requestBody 
     * @param array $queryParameters {
     *     @var bool $clearAll When ClearAll queryparameter is False,Companies List needs to be passed. When ClearAll queryparameter is True, Companies List must be empty. All companies will be deleted
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\ClearCompaniesFromAPortfolioBadRequestException
     * @throws \CreditSafe\API\Exception\ClearCompaniesFromAPortfolioUnauthorizedException
     * @throws \CreditSafe\API\Exception\ClearCompaniesFromAPortfolioForbiddenException
     * @throws \CreditSafe\API\Exception\ClearCompaniesFromAPortfolioNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function clearCompaniesFromAPortfolio(string $portfolioId, \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesClearPatchBody $requestBody, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\ClearCompaniesFromAPortfolio($portfolioId, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Delete a Company
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param string $id A company Safe Number or Connect ID.
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdBadRequestException
     * @throws \CreditSafe\API\Exception\DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdUnauthorizedException
     * @throws \CreditSafe\API\Exception\DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdForbiddenException
     * @throws \CreditSafe\API\Exception\DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMonitoringPortfoliosByPortfolioIdCompanyById(string $portfolioId, string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\DeleteMonitoringPortfoliosByPortfolioIdCompanyById($portfolioId, $id, $headerParameters), $fetch);
    }
    /**
     * Get a company from a portofolio using a company id
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param string $id A company Safe Number or Connect ID.
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\GetAMonitoredCompanyFromAPortfolioBadRequestException
     * @throws \CreditSafe\API\Exception\GetAMonitoredCompanyFromAPortfolioUnauthorizedException
     * @throws \CreditSafe\API\Exception\GetAMonitoredCompanyFromAPortfolioForbiddenException
     * @throws \CreditSafe\API\Exception\GetAMonitoredCompanyFromAPortfolioNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAMonitoredCompanyFromAPortfolio(string $portfolioId, string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\GetAMonitoredCompanyFromAPortfolio($portfolioId, $id, $headerParameters), $fetch);
    }
    /**
     * Updates the company details in a specified portfolio
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param string $id A company Safe Number or Connect ID.
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesIdPatchBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\UpdateCompanyDetailsInAPortfolioBadRequestException
     * @throws \CreditSafe\API\Exception\UpdateCompanyDetailsInAPortfolioUnauthorizedException
     * @throws \CreditSafe\API\Exception\UpdateCompanyDetailsInAPortfolioForbiddenException
     * @throws \CreditSafe\API\Exception\UpdateCompanyDetailsInAPortfolioNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateCompanyDetailsInAPortfolio(string $portfolioId, string $id, \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesIdPatchBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\UpdateCompanyDetailsInAPortfolio($portfolioId, $id, $requestBody, $headerParameters), $fetch);
    }
    /**
     * List of notification events based on the company id,optionally filtered with query parameters
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param string $id A company Safe Number or Connect ID.
     * @param array $queryParameters {
     *     @var string $searchQuery Return notificationEvents that match the given value
     *     @var string $sortDir 
     *     @var int $pageSize Number of items to return per Page (max 1000)
     *     @var int $page Starting page number (indexed from 0)
     *     @var bool $isProcessed A flag that can be set to `true` boolean value to mark it as an event that has beebn actioned.
     *     @var string $sortBy Sort results by this column. Null values of sort column are listed after non-nulls.
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\ListCompanySpecificNotificationEventsBadRequestException
     * @throws \CreditSafe\API\Exception\ListCompanySpecificNotificationEventsUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListCompanySpecificNotificationEventsForbiddenException
     * @throws \CreditSafe\API\Exception\ListCompanySpecificNotificationEventsNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listCompanySpecificNotificationEvents(string $portfolioId, string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\ListCompanySpecificNotificationEvents($portfolioId, $id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Retrieve user permissions within the customer for a portfolio
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\PortfolioUserPermissionsBadRequestException
     * @throws \CreditSafe\API\Exception\PortfolioUserPermissionsUnauthorizedException
     * @throws \CreditSafe\API\Exception\PortfolioUserPermissionsForbiddenException
     * @throws \CreditSafe\API\Exception\PortfolioUserPermissionsNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function portfolioUserPermissions(string $portfolioId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\PortfolioUserPermissions($portfolioId, $headerParameters), $fetch);
    }
    /**
     * Update/Create user permissions within the customer for portfolio
     *
     * @param string $portfolioId The unique identifier of the portfolio, obtained from `/portfolios`.
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\SharePortfolioIdBadRequestException
     * @throws \CreditSafe\API\Exception\SharePortfolioIdUnauthorizedException
     * @throws \CreditSafe\API\Exception\SharePortfolioIdForbiddenException
     * @throws \CreditSafe\API\Exception\SharePortfolioIdNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharePortfolioId(string $portfolioId, \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\SharePortfolioId($portfolioId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * List available decision trees available.
     *
     * @param array $queryParameters {
     *     @var string $type Filter the list of available decision trees by the provided tree type.
     *     @var string $sortBy Sort results by this column. Null values of sort column are listed after non-nulls.
     *     @var string $sortDir 
     *     @var string $callRef Call Reference
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\ListDecisionTreesBadRequestException
     * @throws \CreditSafe\API\Exception\ListDecisionTreesUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListDecisionTreesNotFoundException
     *
     * @return null|\CreditSafe\API\Model\GuidSuccessResponse|\Psr\Http\Message\ResponseInterface
     */
    public function listDecisionTrees(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\ListDecisionTrees($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Calls a Decision Tree with the provided parameters to return a Decision.
     *
     * @param string $provenirId Decision Tree GUID
     * @param \stdClass $requestBody 
     * @param array $queryParameters {
     *     @var string $companyId the connectId of the company to be evaluated in the  deicison tree.
     *     @var string $originationId the origin id of the company we want a decision on. Only up to 100 characters are allowed, the rest will be truncated.
     *     @var string $callRef Call Reference
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\RunDecisionTreeBadRequestException
     * @throws \CreditSafe\API\Exception\RunDecisionTreeUnauthorizedException
     * @throws \CreditSafe\API\Exception\RunDecisionTreeForbiddenException
     * @throws \CreditSafe\API\Exception\RunDecisionTreeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function runDecisionTree(string $provenirId, \stdClass $requestBody, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\RunDecisionTree($provenirId, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the search parameters available to use when making a compliance search request against any Company `predefined Search`.
     *
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\CompanyComplianceSearchCriteriaBadRequestException
     * @throws \CreditSafe\API\Exception\CompanyComplianceSearchCriteriaUnauthorizedException
     * @throws \CreditSafe\API\Exception\CompanyComplianceSearchCriteriaForbiddenException
     * @throws \CreditSafe\API\Exception\CompanyComplianceSearchCriteriaNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyComplianceSearchCriteria(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\CompanyComplianceSearchCriteria($headerParameters), $fetch);
    }
    /**
     * This endpoint returns the list of all available company `predefined Search` types. A `predefined Search` is defined by the compliance watchlist to be be screened, the confidence in matches returned by your search and the entity type (company or person). They are set at 5% increments between 75-100% match confidence. For example - Searching against the `predefined Search` `c-Sanct-95` will look to match your search criteria against the Company Sanctions watchlist and return anything with 95% match confidence.
     *
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\ListOfCompanyPreDefinedSearchesBadRequestException
     * @throws \CreditSafe\API\Exception\ListOfCompanyPreDefinedSearchesUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListOfCompanyPreDefinedSearchesForbiddenException
     *
     * @return null|\CreditSafe\API\Model\CompliancePreDefinedSearches|\Psr\Http\Message\ResponseInterface
     */
    public function listOfCompanyPreDefinedSearches(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\ListOfCompanyPreDefinedSearches($headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\CompanyComplianceSearchBadRequestException
     * @throws \CreditSafe\API\Exception\CompanyComplianceSearchUnauthorizedException
     * @throws \CreditSafe\API\Exception\CompanyComplianceSearchForbiddenException
     *
     * @return null|\CreditSafe\API\Model\ComplianceSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function companyComplianceSearch(string $predefinedSearch, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\CompanyComplianceSearch($predefinedSearch, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the search parameters available to use when making a compliance search request against any Individual/Person `predefined Search`.
     *
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\IndividualsComplianceSearchCriteriaBadRequestException
     * @throws \CreditSafe\API\Exception\IndividualsComplianceSearchCriteriaUnauthorizedException
     * @throws \CreditSafe\API\Exception\IndividualsComplianceSearchCriteriaForbiddenException
     * @throws \CreditSafe\API\Exception\IndividualsComplianceSearchCriteriaNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function individualsComplianceSearchCriteria(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\IndividualsComplianceSearchCriteria($headerParameters), $fetch);
    }
    /**
     * This endpoint returns the list of all available company `predefined Search` types. A `predefined Search` is defined by the compliance watchlist to be be screened, the confidence in matches returned by your search and the entity type (company or person). They are set at 5% increments between 75-100% match confidence. For example - Searching against the `predefined Search` `p-Sanct-95` will look to match your search criteria against the Individuals/Person Sanctions watchlist and return anything with 95% match confidence.
     *
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\ListOfIndividualsPreDefinedSearchesBadRequestException
     * @throws \CreditSafe\API\Exception\ListOfIndividualsPreDefinedSearchesUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListOfIndividualsPreDefinedSearchesForbiddenException
     *
     * @return null|\CreditSafe\API\Model\CompliancePreDefinedSearches|\Psr\Http\Message\ResponseInterface
     */
    public function listOfIndividualsPreDefinedSearches(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\ListOfIndividualsPreDefinedSearches($headerParameters), $fetch);
    }
    /**
     * Searches the provided `Predefined search` list with your search criteria. Results returned here indicate potential matches (depending on the predefined Search used).
     *
     * @param string $predefinedSearch the predefined search that the search will be made against. See the `/predefinedSearches` endpoint
     * @param array $queryParameters {
     *     @var string $countries A Comma-separated list of country codes to search for Individuals in. The list takes ISO/Alpha 2 format country codes. For example US,GB represents searching for Companies in the United States and Great Britain.
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\IndividualPersonComplianceSearchBadRequestException
     * @throws \CreditSafe\API\Exception\IndividualPersonComplianceSearchUnauthorizedException
     * @throws \CreditSafe\API\Exception\IndividualPersonComplianceSearchForbiddenException
     *
     * @return null|\CreditSafe\API\Model\ComplianceSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function individual/PersonComplianceSearch(string $predefinedSearch, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\IndividualPersonComplianceSearch($predefinedSearch, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Endpoint to return mandatory parameters or metadata associated with specific country Company Report requests. To add a custom data parameter, add a Parameter with the key=value pair in the format customData=key::allowedValue I.e. Suppling `DE` as a country code will return a list of reasons for requesting a DE Credit Report (which is a legal requirement to supply with each Credit Report request in Germany). This will provide a list of allowedValues to enter into the mandatory Parameter `customData` = `de_reason_code::allowedValue`
     *
     * @param string $country An ISO/Alpha-2 country code to display any special mandatory parameters when ordering a Credit Report in that territory.
     * @param array $queryParameters {
     *     @var string $template Report template (currently unncessary to provide.)
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \CreditSafe\API\Exception\CustomReportParametersBadRequestException
     * @throws \CreditSafe\API\Exception\CustomReportParametersUnauthorizedException
     * @throws \CreditSafe\API\Exception\CustomReportParametersForbiddenException
     * @throws \CreditSafe\API\Exception\CustomReportParametersNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customReportParameters(string $country, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CreditSafe\API\Endpoint\CustomReportParameters($country, $queryParameters, $headerParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://connect.creditsafe.com/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \CreditSafe\API\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}