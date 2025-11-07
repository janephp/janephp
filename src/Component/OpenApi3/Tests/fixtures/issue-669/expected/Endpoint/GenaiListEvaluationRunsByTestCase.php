<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiListEvaluationRunsByTestCase extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $evaluation_test_case_uuid;
    /**
     * To list all evaluation runs by test case, send a GET request to `/v2/gen-ai/evaluation_test_cases/{evaluation_test_case_uuid}/evaluation_runs`.
     * @param string $evaluationTestCaseUuid Evaluation run UUID.
     * @param array $queryParameters {
     *     @var int $evaluation_test_case_version Version of the test case.
     * }
     */
    public function __construct(string $evaluationTestCaseUuid, array $queryParameters = [])
    {
        $this->evaluation_test_case_uuid = $evaluationTestCaseUuid;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{evaluation_test_case_uuid}'], [$this->evaluation_test_case_uuid], '/v2/gen-ai/evaluation_test_cases/{evaluation_test_case_uuid}/evaluation_runs');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationRunsByTestCaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationRunsByTestCaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationRunsByTestCaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationRunsByTestCaseInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiListEvaluationRunsByTestCaseOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiListEvaluationRunsByTestCaseOutput', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationRunsByTestCaseUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationRunsByTestCaseNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationRunsByTestCaseTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationRunsByTestCaseInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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