<?php

namespace CreditSafe\API\Endpoint;

class FilteredEventRules extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $countryCode;
    /**
     * Get all available notification event rules for the given `countryCode`. Notification event rules allow you to control which events you wish to monitor for the `companies` contained within a given `portfolio`.
     * @param string $countryCode ISO/Alpha 2 format country code for which notification event rules will be retured.
     * @param array{
     *    "Authorization": string, //Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * } $headerParameters
     */
    public function __construct(string $countryCode, array $headerParameters = [])
    {
        $this->countryCode = $countryCode;
        $this->headerParameters = $headerParameters;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{countryCode}'], [rawurlencode($this->countryCode)], '/monitoring/eventRules/{countryCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
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
     * @throws \CreditSafe\API\Exception\FilteredEventRulesBadRequestException
     * @throws \CreditSafe\API\Exception\FilteredEventRulesForbiddenException
     * @throws \CreditSafe\API\Exception\FilteredEventRulesNotFoundException
     *
     * @return null|\CreditSafe\API\Model\EventRulesResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CreditSafe\API\Model\EventRulesResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\FilteredEventRulesBadRequestException($serializer->deserialize($body, 'CreditSafe\API\Model\BadRequestError', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\FilteredEventRulesForbiddenException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\FilteredEventRulesNotFoundException($response);
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