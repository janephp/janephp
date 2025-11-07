<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class ByoipPrefixesDelete extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $byoip_prefix_uuid;
    /**
     * To delete a BYOIP prefix and remove it from your account, send a DELETE request
     * to `/v2/byoip_prefixes/$byoip_prefix_uuid`.
     *
     * A successful request will receive a 202 status code with no body in response.
     * This indicates that the request was accepted and the prefix is being deleted.
     *
     * @param string $byoipPrefixUuid The unique identifier for the BYOIP Prefix.
     */
    public function __construct(string $byoipPrefixUuid)
    {
        $this->byoip_prefix_uuid = $byoipPrefixUuid;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{byoip_prefix_uuid}'], [$this->byoip_prefix_uuid], '/v2/byoip_prefixes/{byoip_prefix_uuid}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteUnprocessableEntityException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteUnprocessableEntityException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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