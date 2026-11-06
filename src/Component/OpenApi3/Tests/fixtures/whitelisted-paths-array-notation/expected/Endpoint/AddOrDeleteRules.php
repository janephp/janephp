<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Endpoint;

class AddOrDeleteRules extends \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Add or delete rules from a user's active rule set. Users can provide unique, optionally tagged rules to add. Users can delete their entire rule set or a subset specified by rule ids or values.
     * @param mixed $requestBody
     * @param array{
     *    "dry_run"?: bool, //Dry Run can be used with both the add and delete action, with the expected result given, but without actually taking any action in the system (meaning the end state will always be as it was when the request was submitted). This is particularly useful to validate rule changes.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct($requestBody, array $queryParameters = [], array $accept = [])
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/labs/1/tweets/stream/filter/rules';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if (isset($this->body)) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/problem+json']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['dry_run']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('dry_run', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Exception\BadResponseException
     *
     * @return null|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Error|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\GenericProblem|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\InvalidRequestProblem|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ClientForbiddenProblem|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ResourceNotFoundProblem|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ResourceUnauthorizedProblem|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DisallowedResourceProblem|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\UnsupportedAuthenticationProblem|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\UsageCapExceededProblem|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ConnectionExceptionProblem|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ClientDisconnectedProblem|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\OperationalDisconnectProblem|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\RulesCapProblem|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\InvalidRuleProblem
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                return $decodedBody;
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if (stripos(strtolower((string) $contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Error', 'json');
        }
        if (stripos(strtolower((string) $contentType), 'application/problem+json') !== false) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                if (is_object($decodedBody)) {
                    switch ($decodedBody->type ?? null) {
                        case 'about:blank':
                            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\GenericProblem', 'json');
                        case 'https://api.twitter.com/labs/1/problems/invalid-request':
                            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\InvalidRequestProblem', 'json');
                        case 'https://api.twitter.com/labs/1/problems/client-forbidden':
                            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ClientForbiddenProblem', 'json');
                        case 'https://api.twitter.com/labs/1/problems/resource-not-found':
                            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ResourceNotFoundProblem', 'json');
                        case 'https://api.twitter.com/labs/1/problems/not-authorized-for-resource':
                            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ResourceUnauthorizedProblem', 'json');
                        case 'https://api.twitter.com/labs/1/problems/disallowed-resource':
                            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DisallowedResourceProblem', 'json');
                        case 'https://api.twitter.com/labs/1/problems/unsupported-authentication':
                            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\UnsupportedAuthenticationProblem', 'json');
                        case 'https://api.twitter.com/labs/1/problems/usage-capped':
                            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\UsageCapExceededProblem', 'json');
                        case 'https://api.twitter.com/labs/1/problems/streaming-connection':
                            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ConnectionExceptionProblem', 'json');
                        case 'https://api.twitter.com/labs/1/problems/client-disconnected':
                            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ClientDisconnectedProblem', 'json');
                        case 'https://api.twitter.com/labs/1/problems/operational-disconnect':
                            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\OperationalDisconnectProblem', 'json');
                        case 'https://api.twitter.com/labs/1/problems/rule-cap':
                            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\RulesCapProblem', 'json');
                        case 'https://api.twitter.com/labs/1/problems/invalid-rules':
                            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\InvalidRuleProblem', 'json');
                    }
                }
                return $decodedBody;
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        throw new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
    public function getTargetClass(): ?string
    {
        return null;
    }
}