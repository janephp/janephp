<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class PartialUpdateIdentityPackagesById extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * @param string $id
     * @param \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityModifySubscriptionPackage $body
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $id, \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityModifySubscriptionPackage $body, array $queryParameters = [])
    {
        $this->id = $id;
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
        return str_replace(['{id}'], [$this->id], '/identity/packages/{id}');
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateIdentityPackagesByIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateIdentityPackagesByIdForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateIdentityPackagesByIdInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateIdentityPackagesByIdUnprocessableEntityException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\CommonEmptyResult
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateIdentityPackagesByIdBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateIdentityPackagesByIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateIdentityPackagesByIdInternalServerErrorException($response);
        }
        if (422 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\PartialUpdateIdentityPackagesByIdUnprocessableEntityException($response);
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