<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiListModels extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
    * To list all models, send a GET request to `/v2/gen-ai/models`.
    * @param array{
    *    "usecases"?: array, //Include only models defined for the listed usecases.
    
    - MODEL_USECASE_UNKNOWN: The use case of the model is unknown
    - MODEL_USECASE_AGENT: The model maybe used in an agent
    - MODEL_USECASE_FINETUNED: The model maybe used for fine tuning
    - MODEL_USECASE_KNOWLEDGEBASE: The model maybe used for knowledge bases (embedding models)
    - MODEL_USECASE_GUARDRAIL: The model maybe used for guardrails
    - MODEL_USECASE_REASONING: The model usecase for reasoning
    - MODEL_USECASE_SERVERLESS: The model usecase for serverless inference
    *    "public_only"?: bool, //Only include models that are publicly available.
    *    "page"?: int, //Page number.
    *    "per_page"?: int, //Items per page.
    * } $queryParameters
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v2/gen-ai/models';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
        $optionsResolver->setDefined(['usecases', 'public_only', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('usecases', ['array']);
        $optionsResolver->addAllowedTypes('public_only', ['bool']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        return $optionsResolver;
    }
    protected function getQueryStyles(): array
    {
        return ['usecases' => ['style' => 'form', 'explode' => true]];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListModelsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListModelsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListModelsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListModelsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiListModelsOutputPublic|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiListModelsOutputPublic', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListModelsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListModelsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListModelsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListModelsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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