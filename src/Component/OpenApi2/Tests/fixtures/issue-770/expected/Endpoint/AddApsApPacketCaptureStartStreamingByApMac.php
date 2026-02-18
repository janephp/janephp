<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class AddApsApPacketCaptureStartStreamingByApMac extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $apMac;
    /**
     * @param string $apMac
     * @param \Jane\Component\OpenApi3\Tests\Expected\Model\ApPacketCaptureApPacketCaptureReq $body
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $apMac, \Jane\Component\OpenApi3\Tests\Expected\Model\ApPacketCaptureApPacketCaptureReq $body, array $queryParameters = [])
    {
        $this->apMac = $apMac;
        $this->body = $body;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{apMac}'], [$this->apMac], '/aps/{apMac}/apPacketCapture/startStreaming');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
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
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsApPacketCaptureStartStreamingByApMacBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsApPacketCaptureStartStreamingByApMacForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsApPacketCaptureStartStreamingByApMacInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsApPacketCaptureStartStreamingByApMacUnprocessableEntityException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\ApPacketCaptureApPacketCaptureRes
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsApPacketCaptureStartStreamingByApMacBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsApPacketCaptureStartStreamingByApMacForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsApPacketCaptureStartStreamingByApMacInternalServerErrorException($response);
        }
        if (422 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsApPacketCaptureStartStreamingByApMacUnprocessableEntityException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\ApPacketCaptureApPacketCaptureRes', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}