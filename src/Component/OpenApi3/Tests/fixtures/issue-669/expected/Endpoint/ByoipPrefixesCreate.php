<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class ByoipPrefixesCreate extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * To create a BYOIP prefix, send a POST request to `/v2/byoip_prefixes`.
     *
     * A successful request will initiate the process of bringing your BYOIP Prefix into your account.
     * The response will include the details of the created prefix, including its UUID and status.
     *
     * @param \Jane\Generated\DigitalOcean\Model\ByoipPrefixCreate $requestBody
     */
    public function __construct(\Jane\Generated\DigitalOcean\Model\ByoipPrefixCreate $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v2/byoip_prefixes';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\ByoipPrefixCreate) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesCreateUnprocessableEntityException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesCreateInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixCreate|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (202 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixCreate', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesCreateUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesCreateUnprocessableEntityException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesCreateTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesCreateInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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