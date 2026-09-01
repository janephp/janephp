<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class VpcPeeringsPatch extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $vpc_peering_id;
    /**
     * To update the name of a VPC peering, send a PATCH request to `/v2/vpc_peerings/$VPC_PEERING_ID` with the new `name` in the request body.
     *
     * @param string $vpcPeeringId A unique identifier for a VPC peering.
     * @param \Jane\Generated\DigitalOcean\Model\V2VpcPeeringsVpcPeeringIdPatchBody $requestBody
     */
    public function __construct(string $vpcPeeringId, \Jane\Generated\DigitalOcean\Model\V2VpcPeeringsVpcPeeringIdPatchBody $requestBody)
    {
        $this->vpc_peering_id = $vpcPeeringId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{vpc_peering_id}'], [rawurlencode($this->vpc_peering_id)], '/v2/vpc_peerings/{vpc_peering_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2VpcPeeringsVpcPeeringIdPatchBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseActiveVpcPeering|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseActiveVpcPeering', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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