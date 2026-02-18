<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class ReservedIPv6Delete extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $reserved_ipv6;
    /**
     * To delete a reserved IP and remove it from your account, send a DELETE request
     * to `/v2/reserved_ipv6/$RESERVED_IPV6`.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param string $reservedIpv6 A reserved IPv6 address.
     */
    public function __construct(string $reservedIpv6)
    {
        $this->reserved_ipv6 = $reservedIpv6;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{reserved_ipv6}'], [$this->reserved_ipv6], '/v2/reserved_ipv6/{reserved_ipv6}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteUnprocessableEntityException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteUnprocessableEntityException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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