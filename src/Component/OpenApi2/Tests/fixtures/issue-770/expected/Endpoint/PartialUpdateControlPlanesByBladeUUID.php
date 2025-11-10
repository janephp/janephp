<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class PartialUpdateControlPlanesByBladeUUID extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $bladeUUID;
    /**
     * @param string $bladeUUID
     * @param \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyControlPlane $body
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $bladeUUID, \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyControlPlane $body, array $queryParameters = [])
    {
        $this->bladeUUID = $bladeUUID;
        $this->body = $body;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{bladeUUID}'], [$this->bladeUUID], '/controlPlanes/{bladeUUID}');
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateControlPlanesByBladeUUIDBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateControlPlanesByBladeUUIDForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateControlPlanesByBladeUUIDInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateControlPlanesByBladeUUIDUnprocessableEntityException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\CommonEmptyResult
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateControlPlanesByBladeUUIDBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateControlPlanesByBladeUUIDForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateControlPlanesByBladeUUIDInternalServerErrorException($response);
        }
        if (422 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateControlPlanesByBladeUUIDUnprocessableEntityException($response);
        }
        if (204 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\CommonEmptyResult', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}