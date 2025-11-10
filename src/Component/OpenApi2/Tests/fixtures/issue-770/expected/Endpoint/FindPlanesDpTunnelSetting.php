<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class FindPlanesDpTunnelSetting extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $uploadFile The file to upload
     * }
     */
    public function __construct(array $queryParameters = [], array $formParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->formParameters = $formParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/planes/dpTunnel/setting';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getMultipartBody($streamFactory);
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['serviceTicket']);
        $optionsResolver->setRequired(['serviceTicket']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('serviceTicket', ['string']);
        return $optionsResolver;
    }
    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['uploadFile']);
        $optionsResolver->setRequired(['uploadFile']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('uploadFile', ['string', 'resource', '\Psr\Http\Message\StreamInterface']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindPlanesDpTunnelSettingBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindPlanesDpTunnelSettingForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindPlanesDpTunnelSettingInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\SystemGetDataPlaneMeshTunnelSetting
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindPlanesDpTunnelSettingBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindPlanesDpTunnelSettingForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindPlanesDpTunnelSettingInternalServerErrorException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\SystemGetDataPlaneMeshTunnelSetting', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}