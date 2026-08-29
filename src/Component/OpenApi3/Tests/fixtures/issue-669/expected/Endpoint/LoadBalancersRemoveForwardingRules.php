<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class LoadBalancersRemoveForwardingRules extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $lb_id;
    /**
     * To remove forwarding rules from a load balancer instance, send a DELETE
     * request to `/v2/load_balancers/$LOAD_BALANCER_ID/forwarding_rules`. In the
     * body of the request, there should be a `forwarding_rules` attribute containing
     * an array of rules to be removed.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $lbId A unique identifier for a load balancer.
     * @param \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdForwardingRulesDeleteBody $requestBody
     */
    public function __construct(string $lbId, \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdForwardingRulesDeleteBody $requestBody)
    {
        $this->lb_id = $lbId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{lb_id}'], [rawurlencode($this->lb_id)], '/v2/load_balancers/{lb_id}/forwarding_rules');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdForwardingRulesDeleteBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveForwardingRulesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveForwardingRulesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveForwardingRulesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveForwardingRulesInternalServerErrorException
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
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveForwardingRulesUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveForwardingRulesNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveForwardingRulesTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveForwardingRulesInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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