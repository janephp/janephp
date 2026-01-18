<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class BillingInsightsList extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $account_urn;
    protected $start_date;
    protected $end_date;
    /**
     *
     * This endpoint returns day-over-day changes in billing resource usage based on nightly invoice items, including total amount, region, SKU, and description for a specified date range. It is important to note that the daily resource usage may not reflect month-end billing totals when totaled for a given month as nightly invoice item estimates do not necessarily encompass all invoicing factors for the entire month.
     * @param string $accountUrn URN of the customer account, can be a team (do:team:uuid) or an organization (do:teamgroup:uuid)
     * @param string $startDate Start date for billing insights in YYYY-MM-DD format
     * @param string $endDate End date for billing insights in YYYY-MM-DD format. Must be within 31 days of start_date
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     */
    public function __construct(string $accountUrn, string $startDate, string $endDate, array $queryParameters = [])
    {
        $this->account_urn = $accountUrn;
        $this->start_date = $startDate;
        $this->end_date = $endDate;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{account_urn}', '{start_date}', '{end_date}'], [$this->account_urn, $this->start_date, $this->end_date], '/v2/billing/{account_urn}/insights/{start_date}/{end_date}');
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
        $optionsResolver->setDefined(['per_page', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['per_page' => 20, 'page' => 1]);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\BillingInsightsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\BillingInsightsListNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\BillingInsightsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\BillingInsightsListInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseBillingInsights|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseBillingInsights', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\BillingInsightsListUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\BillingInsightsListNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\BillingInsightsListTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\BillingInsightsListInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}