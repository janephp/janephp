<?php

namespace Jane\OpenApi3\Tests\Expected\Endpoint;

class AddOrDeleteRules extends \Jane\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
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
    use \Jane\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/labs/1/tweets/stream/filter/rules';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     *
     * @return null|\Jane\OpenApi3\Tests\Expected\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return json_decode($body);
        }
        if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\Model\Error', 'json');
        }
        if (mb_strpos(strtolower($contentType), 'application/problem+json') !== false) {
            return json_decode($body);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}