<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class PartnerAttachmentsGetServiceKey extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $pa_id;
    /**
     * To get the current service key for a partner attachment, send a `GET` request to
     * `/v2/partner_network_connect/attachments/{pa_id}/service_key`.
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
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{pa_id}'], [$this->pa_id], '/v2/partner_network_connect/attachments/{pa_id}/service_key');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetServiceKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetServiceKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetServiceKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetServiceKeyInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachmentServiceKey|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachmentServiceKey', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetServiceKeyUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetServiceKeyNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetServiceKeyTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetServiceKeyInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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