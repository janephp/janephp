<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Endpoint;

class UpdateDpNatProfilesById extends \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * @param string $id
     * @param \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfileBasicBO $body
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $id, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfileBasicBO $body, array $queryParameters = [])
    {
        $this->id = $id;
        $this->body = $body;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [rawurlencode($this->id)], '/dpNatProfiles/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedObjectBody($serializer);
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpNatProfilesByIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpNatProfilesByIdForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpNatProfilesByIdInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpNatProfilesByIdUnprocessableEntityException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfileBasicBO
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpNatProfilesByIdBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpNatProfilesByIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpNatProfilesByIdInternalServerErrorException($response);
        }
        if (422 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpNatProfilesByIdUnprocessableEntityException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfileBasicBO', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}