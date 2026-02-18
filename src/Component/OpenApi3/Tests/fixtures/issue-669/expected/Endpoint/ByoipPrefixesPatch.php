<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class ByoipPrefixesPatch extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $byoip_prefix_uuid;
    /**
     * To update a BYOIP prefix, send a PATCH request to `/v2/byoip_prefixes/$byoip_prefix_uuid`.
     *
     * Currently, you can update the advertisement status of the prefix.
     * The response will include the updated details of the prefix.
     *
     * @param string $byoipPrefixUuid A unique identifier for a BYOIP prefix.
     * @param \Jane\Generated\DigitalOcean\Model\ByoipPrefixUpdate $requestBody
     */
    public function __construct(string $byoipPrefixUuid, \Jane\Generated\DigitalOcean\Model\ByoipPrefixUpdate $requestBody)
    {
        $this->byoip_prefix_uuid = $byoipPrefixUuid;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{byoip_prefix_uuid}'], [$this->byoip_prefix_uuid], '/v2/byoip_prefixes/{byoip_prefix_uuid}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\ByoipPrefixUpdate) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
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
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchUnprocessableEntityException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixUpdate|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (202 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixUpdate', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchUnprocessableEntityException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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