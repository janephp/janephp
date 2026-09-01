<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class LoadBalancersAddForwardingRules extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $lb_id;
    /**
     * To add an additional forwarding rule to a load balancer instance, send a POST
     * request to `/v2/load_balancers/$LOAD_BALANCER_ID/forwarding_rules`. In the body
     * of the request, there should be a `forwarding_rules` attribute containing an
     * array of rules to be added.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $lbId A unique identifier for a load balancer.
     * @param \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdForwardingRulesPostBody $requestBody
     */
    public function __construct(string $lbId, \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdForwardingRulesPostBody $requestBody)
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
        return str_replace(['{lb_id}'], [rawurlencode($this->lb_id)], '/v2/load_balancers/{lb_id}/forwarding_rules');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdForwardingRulesPostBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddForwardingRulesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddForwardingRulesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddForwardingRulesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddForwardingRulesInternalServerErrorException
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
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddForwardingRulesUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddForwardingRulesNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddForwardingRulesTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddForwardingRulesInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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