<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class OneClicksInstallKubernetes extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * To install a Kubernetes 1-Click application on a cluster, send a POST request to
     * `/v2/1-clicks/kubernetes`. The `addon_slugs` and `cluster_uuid` must be provided as body
     * parameter in order to specify which 1-Click application(s) to install. To list all available
     * 1-Click Kubernetes applications, send a request to `/v2/1-clicks?type=kubernetes`.
     *
     * @param \Jane\Generated\DigitalOcean\Model\OneClicksCreate $requestBody
     */
    public function __construct(\Jane\Generated\DigitalOcean\Model\OneClicksCreate $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v2/1-clicks/kubernetes';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\OneClicksCreate) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\OneClicksInstallKubernetesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\OneClicksInstallKubernetesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\OneClicksInstallKubernetesInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseOneClicksCreate|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseOneClicksCreate', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\OneClicksInstallKubernetesUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\OneClicksInstallKubernetesTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\OneClicksInstallKubernetesInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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