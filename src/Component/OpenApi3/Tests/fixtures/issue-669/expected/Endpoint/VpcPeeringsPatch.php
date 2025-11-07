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
        return str_replace(['{vpc_peering_id}'], [$this->vpc_peering_id], '/v2/vpc_peerings/{vpc_peering_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2VpcPeeringsVpcPeeringIdPatchBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseActiveVpcPeering|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseActiveVpcPeering', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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