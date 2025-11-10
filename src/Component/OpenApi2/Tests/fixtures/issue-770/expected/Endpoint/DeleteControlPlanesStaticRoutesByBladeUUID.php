<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class DeleteControlPlanesStaticRoutesByBladeUUID extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $bladeUUID;
    /**
     * @param string $bladeUUID
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $bladeUUID, array $queryParameters = [])
    {
        $this->bladeUUID = $bladeUUID;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{bladeUUID}'], [$this->bladeUUID], '/controlPlanes/{bladeUUID}/staticRoutes');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\DeleteControlPlanesStaticRoutesByBladeUUIDBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\DeleteControlPlanesStaticRoutesByBladeUUIDForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\DeleteControlPlanesStaticRoutesByBladeUUIDInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\DeleteControlPlanesStaticRoutesByBladeUUIDBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\DeleteControlPlanesStaticRoutesByBladeUUIDForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\DeleteControlPlanesStaticRoutesByBladeUUIDInternalServerErrorException($response);
        }
        if (204 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}