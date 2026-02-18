<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class LoadBalancersAddDroplets extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $lb_id;
    /**
     * To assign a Droplet to a load balancer instance, send a POST request to
     * `/v2/load_balancers/$LOAD_BALANCER_ID/droplets`. In the body of the request,
     * there should be a `droplet_ids` attribute containing a list of Droplet IDs.
     * Individual Droplets can not be added to a load balancer configured with a
     * Droplet tag. Attempting to do so will result in a "422 Unprocessable Entity"
     * response from the API.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $lbId A unique identifier for a load balancer.
     * @param \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdDropletsPostBody $requestBody
     */
    public function __construct(string $lbId, \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdDropletsPostBody $requestBody)
    {
        $this->lb_id = $lbId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{lb_id}'], [$this->lb_id], '/v2/load_balancers/{lb_id}/droplets');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdDropletsPostBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddDropletsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddDropletsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddDropletsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddDropletsInternalServerErrorException
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
            throw new \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddDropletsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddDropletsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddDropletsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddDropletsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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