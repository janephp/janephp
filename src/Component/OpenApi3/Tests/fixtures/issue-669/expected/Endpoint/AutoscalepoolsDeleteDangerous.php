<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class AutoscalepoolsDeleteDangerous extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $autoscale_pool_id;
    /**
     * To destroy an autoscale pool and its associated resources (Droplets),
     * send a DELETE request to the `/v2/droplets/autoscale/$AUTOSCALE_POOL_ID/dangerous` endpoint.
     *
     * @param string $autoscalePoolId A unique identifier for an autoscale pool.
     * @param array{
     *    "X-Dangerous": bool, //Acknowledge this action will destroy the autoscale pool and its associated resources and _can not_ be reversed.
     * } $headerParameters
     */
    public function __construct(string $autoscalePoolId, array $headerParameters = [])
    {
        $this->autoscale_pool_id = $autoscalePoolId;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{autoscale_pool_id}'], [rawurlencode($this->autoscale_pool_id)], '/v2/droplets/autoscale/{autoscale_pool_id}/dangerous');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
        $optionsResolver->setDefined(['X-Dangerous']);
        $optionsResolver->setRequired(['X-Dangerous']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Dangerous', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteDangerousUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteDangerousNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteDangerousTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteDangerousInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (202 === $status) {
            return null;
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteDangerousUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteDangerousNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteDangerousTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteDangerousInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}