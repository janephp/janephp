<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiUpdateEvaluationTestCase extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $test_case_uuid;
    /**
     * To update an evaluation test-case send a PUT request to `/v2/gen-ai/evaluation_test_cases/{test_case_uuid}`.
     * @param string $testCaseUuid Test-case UUID to update
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseInputPublic $requestBody
     */
    public function __construct(string $testCaseUuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseInputPublic $requestBody = null)
    {
        $this->test_case_uuid = $testCaseUuid;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{test_case_uuid}'], [$this->test_case_uuid], '/v2/gen-ai/evaluation_test_cases/{test_case_uuid}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseInputPublic) {
            return [['Content-Type' => ['application/json']], \Jane\Generated\DigitalOcean\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateEvaluationTestCaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateEvaluationTestCaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateEvaluationTestCaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateEvaluationTestCaseInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseOutput', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateEvaluationTestCaseUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateEvaluationTestCaseNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateEvaluationTestCaseTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiUpdateEvaluationTestCaseInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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