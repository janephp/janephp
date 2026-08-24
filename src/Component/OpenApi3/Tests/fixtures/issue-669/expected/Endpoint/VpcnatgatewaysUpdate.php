<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class VpcnatgatewaysUpdate extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * To update the configuration of an existing VPC NAT Gateway, send a PUT request to
     * `/v2/vpc_nat_gateways/$VPC_NAT_GATEWAY_ID`. The request must contain a full representation
     * of the VPC NAT Gateway including existing attributes.
     *
     * @param string $id The unique identifier of the VPC NAT gateway.
     * @param null|\Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdate $requestBody
     */
    public function __construct(string $id, ?\Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdate $requestBody = null)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v2/vpc_nat_gateways/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdate) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysUpdateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysUpdateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysUpdateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysUpdateInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseVpcNatGatewayUpdate|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseVpcNatGatewayUpdate', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysUpdateUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysUpdateNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysUpdateTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysUpdateInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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