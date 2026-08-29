<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class NfsCreateAction extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $nfs_id;
    /**
     * To execute an action (such as resize) on a specified NFS share,
     * send a POST request to `/v2/nfs/{nfs_id}/actions`. In the JSON body
     * to the request, set the `type` attribute to on of the supported action types:
     *
     * | Action                           | Details |
     * | -------------------------------- | ----------- |
     * | <nobr>`resize`</nobr>            | Resizes an NFS share. Set the size_gib attribute to a desired value in GiB |
     * | <nobr>`snapshot`</nobr>          | Takes a snapshot of an NFS share |
     * | <nobr>`attach`</nobr>            | Attaches an NFS share to a VPC. Set the vpc_id attribute to the desired VPC ID |
     * | <nobr>`detach`</nobr>            | Detaches an NFS share from a VPC. Set the vpc_id attribute to the desired VPC ID |
     *
     * @param string $nfsId The unique ID of the NFS share
     * @param mixed $requestBody
     */
    public function __construct(string $nfsId, $requestBody)
    {
        $this->nfs_id = $nfsId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{nfs_id}'], [rawurlencode($this->nfs_id)], '/v2/nfs/{nfs_id}/actions');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsCreateActionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsCreateActionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsCreateActionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsCreateActionInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\NfsActionsResponse|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\NfsActionsResponse', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\NfsCreateActionUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\NfsCreateActionNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\NfsCreateActionTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\NfsCreateActionInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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