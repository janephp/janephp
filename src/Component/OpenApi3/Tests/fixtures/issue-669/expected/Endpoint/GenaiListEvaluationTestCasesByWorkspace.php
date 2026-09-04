<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiListEvaluationTestCasesByWorkspace extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $workspace_uuid;
    /**
     * To list all evaluation test cases by a workspace, send a GET request to `/v2/gen-ai/workspaces/{workspace_uuid}/evaluation_test_cases`.
     * @param string $workspaceUuid Workspace UUID.
     */
    public function __construct(string $workspaceUuid)
    {
        $this->workspace_uuid = $workspaceUuid;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{workspace_uuid}'], [rawurlencode($this->workspace_uuid)], '/v2/gen-ai/workspaces/{workspace_uuid}/evaluation_test_cases');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesByWorkspaceUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesByWorkspaceNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesByWorkspaceTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesByWorkspaceInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiListEvaluationTestCasesByWorkspaceOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiListEvaluationTestCasesByWorkspaceOutput', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesByWorkspaceUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesByWorkspaceNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesByWorkspaceTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesByWorkspaceInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (stripos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}