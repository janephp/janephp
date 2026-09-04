<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class GenaiListKnowledgeBaseDataSources extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $knowledge_base_uuid;
    /**
     * To list all data sources for a knowledge base, send a GET request to `/v2/gen-ai/knowledge_bases/{knowledge_base_uuid}/data_sources`.
     * @param string $knowledgeBaseUuid Knowledge base id
     * @param array{
     *    "page"?: int, //Page number.
     *    "per_page"?: int, //Items per page.
     * } $queryParameters
     */
    public function __construct(string $knowledgeBaseUuid, array $queryParameters = [])
    {
        $this->knowledge_base_uuid = $knowledgeBaseUuid;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{knowledge_base_uuid}'], [rawurlencode($this->knowledge_base_uuid)], '/v2/gen-ai/knowledge_bases/{knowledge_base_uuid}/data_sources');
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
        $optionsResolver->setDefined(['page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBaseDataSourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBaseDataSourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBaseDataSourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBaseDataSourcesInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseDataSourcesOutput|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseDataSourcesOutput', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBaseDataSourcesUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBaseDataSourcesNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBaseDataSourcesTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBaseDataSourcesInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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