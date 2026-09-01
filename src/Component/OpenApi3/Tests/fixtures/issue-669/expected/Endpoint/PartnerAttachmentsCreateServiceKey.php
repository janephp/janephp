<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class PartnerAttachmentsCreateServiceKey extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $pa_id;
    /**
     * This operation generates a new service key for the specified partner attachment. The operation is asynchronous, and the response is an empty JSON object returned with a 202 status code. To poll for the new service key, send a `GET` request to `/v2/partner_network_connect/attachments/{pa_id}/service_key`.
     *
     * @param string $paId A unique identifier for a partner attachment.
     */
    public function __construct(string $paId)
    {
        $this->pa_id = $paId;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{pa_id}'], [rawurlencode($this->pa_id)], '/v2/partner_network_connect/attachments/{pa_id}/service_key');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateServiceKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateServiceKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateServiceKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateServiceKeyInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseEmptyJsonObject|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (202 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseEmptyJsonObject', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateServiceKeyUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateServiceKeyNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateServiceKeyTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateServiceKeyInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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