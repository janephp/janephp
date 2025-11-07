<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class PartnerAttachmentsDelete extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $pa_id;
    /**
     * To delete an existing partner attachment, send a `DELETE` request to
     * `/v2/partner_network_connect/attachments/{pa_id}`.
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
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{pa_id}'], [$this->pa_id], '/v2/partner_network_connect/attachments/{pa_id}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsDeleteInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachmentDeleting|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (202 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachmentDeleting', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsDeleteUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsDeleteNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsDeleteTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsDeleteInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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