<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiGetEvaluationTestCase extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $test_case_uuid;
    /**
     * To retrive information about an existing evaluation test case, send a GET request to `/v2/gen-ai/evaluation_test_case/{test_case_uuid}`.
     * @param string $testCaseUuid The test case uuid to retrieve.
     * @param array $queryParameters {
     *     @var int $evaluation_test_case_version Version of the test case.
     * }
     */
    public function __construct(string $testCaseUuid, array $queryParameters = [])
    {
        $this->test_case_uuid = $testCaseUuid;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{test_case_uuid}'], [$this->test_case_uuid], '/v2/gen-ai/evaluation_test_cases/{test_case_uuid}');
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
        $optionsResolver->setDefined(['evaluation_test_case_version']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('evaluation_test_case_version', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationTestCaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationTestCaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationTestCaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationTestCaseInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiGetEvaluationTestCaseOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiGetEvaluationTestCaseOutput', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationTestCaseUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationTestCaseNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationTestCaseTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationTestCaseInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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