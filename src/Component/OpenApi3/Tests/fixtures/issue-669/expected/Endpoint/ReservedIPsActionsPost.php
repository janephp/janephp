<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class ReservedIPsActionsPost extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $reserved_ip;
    /**
     * To initiate an action on a reserved IP send a POST request to
     * `/v2/reserved_ips/$RESERVED_IP/actions`. In the JSON body to the request,
     * set the `type` attribute to on of the supported action types:
     *
     * | Action     | Details
     * |------------|--------
     * | `assign`   | Assigns a reserved IP to a Droplet
     * | `unassign` | Unassign a reserved IP from a Droplet
     *
     * @param string $reservedIp A reserved IP address.
     * @param null|mixed $requestBody
     */
    public function __construct(string $reservedIp, $requestBody = null)
    {
        $this->reserved_ip = $reservedIp;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{reserved_ip}'], [rawurlencode($this->reserved_ip)], '/v2/reserved_ips/{reserved_ip}/actions');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsPostUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsPostNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsPostTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsPostInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseReservedIpAction|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseReservedIpAction', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsPostUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsPostNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsPostTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsPostInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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