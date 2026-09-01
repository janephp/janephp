<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class VpcsPatchPeerings extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $vpc_id;
    protected $vpc_peering_id;
    /**
     * To update the name of a VPC peering in a particular VPC, send a PATCH request
     * to `/v2/vpcs/$VPC_ID/peerings/$VPC_PEERING_ID` with the new `name` in the
     * request body.
     *
     * @param string $vpcId A unique identifier for a VPC.
     * @param string $vpcPeeringId A unique identifier for a VPC peering.
     * @param \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPeeringsVpcPeeringIdPatchBody $requestBody
     */
    public function __construct(string $vpcId, string $vpcPeeringId, \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPeeringsVpcPeeringIdPatchBody $requestBody)
    {
        $this->vpc_id = $vpcId;
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
        return str_replace(['{vpc_id}', '{vpc_peering_id}'], [rawurlencode($this->vpc_id), rawurlencode($this->vpc_peering_id)], '/v2/vpcs/{vpc_id}/peerings/{vpc_peering_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPeeringsVpcPeeringIdPatchBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsPatchPeeringsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsPatchPeeringsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsPatchPeeringsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsPatchPeeringsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseVpcPeering|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseVpcPeering', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcsPatchPeeringsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcsPatchPeeringsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcsPatchPeeringsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcsPatchPeeringsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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