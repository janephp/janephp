<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class AddonsPatch extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $resource_uuid;
    /**
     * To change the name of an Add-On Resource, send a PATCH request to `/v2/add-ons/saas/{resource_uuid}`.
     * Replace `{resource_uuid}` with the UUID of the resource for which you want to change the name.
     *
     * @param string $resourceUuid The UUID of the add-on resource to rename.
     * @param \Jane\Generated\DigitalOcean\Model\V2AddOnsSaasResourceUuidPatchBody $requestBody
     */
    public function __construct(string $resourceUuid, \Jane\Generated\DigitalOcean\Model\V2AddOnsSaasResourceUuidPatchBody $requestBody)
    {
        $this->resource_uuid = $resourceUuid;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{resource_uuid}'], [rawurlencode($this->resource_uuid)], '/v2/add-ons/saas/{resource_uuid}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2AddOnsSaasResourceUuidPatchBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsPatchUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsPatchNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsPatchTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsPatchInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseAddonsUpdate|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseAddonsUpdate', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AddonsPatchUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AddonsPatchNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AddonsPatchTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AddonsPatchInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (stripos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}