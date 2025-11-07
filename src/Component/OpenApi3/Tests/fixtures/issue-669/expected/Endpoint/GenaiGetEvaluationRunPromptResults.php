<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiGetEvaluationRunPromptResults extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $evaluation_run_uuid;
    protected $prompt_id;
    /**
     * To retrieve results of an evaluation run, send a GET request to `/v2/gen-ai/evaluation_runs/{evaluation_run_uuid}/results/{prompt_id}`.
     * @param string $evaluationRunUuid Evaluation run UUID.
     * @param int $promptId Prompt ID to get results for.
     */
    public function __construct(string $evaluationRunUuid, int $promptId)
    {
        $this->evaluation_run_uuid = $evaluationRunUuid;
        $this->prompt_id = $promptId;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{evaluation_run_uuid}', '{prompt_id}'], [$this->evaluation_run_uuid, $this->prompt_id], '/v2/gen-ai/evaluation_runs/{evaluation_run_uuid}/results/{prompt_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunPromptResultsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunPromptResultsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunPromptResultsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunPromptResultsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiGetEvaluationRunPromptResultsOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiGetEvaluationRunPromptResultsOutput', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunPromptResultsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunPromptResultsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunPromptResultsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunPromptResultsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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