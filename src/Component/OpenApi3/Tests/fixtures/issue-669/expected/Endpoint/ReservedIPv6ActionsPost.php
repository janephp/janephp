<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class ReservedIPv6ActionsPost extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $reserved_ipv6;
    /**
     * To initiate an action on a reserved IPv6 send a POST request to
     * `/v2/reserved_ipv6/$RESERVED_IPV6/actions`. In the JSON body to the request,
     * set the `type` attribute to on of the supported action types:
     *
     * | Action     | Details
     * |------------|--------
     * | `assign`   | Assigns a reserved IPv6 to a Droplet
     * | `unassign` | Unassign a reserved IPv6 from a Droplet
     *
     * @param string $reservedIpv6 A reserved IPv6 address.
     * @param null|mixed $requestBody
     */
    public function __construct(string $reservedIpv6, $requestBody = null)
    {
        $this->reserved_ipv6 = $reservedIpv6;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{reserved_ipv6}'], [rawurlencode($this->reserved_ipv6)], '/v2/reserved_ipv6/{reserved_ipv6}/actions');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if (isset($this->body)) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ActionsPostUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ActionsPostNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ActionsPostTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ActionsPostInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6Action|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6Action', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ActionsPostUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ActionsPostNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ActionsPostTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ActionsPostInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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