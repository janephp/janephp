<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Endpoint;

class AddDpNatProfiles extends \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\Endpoint
{
    /**
     * @param \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfileBasicBO $body
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfileBasicBO $body, array $queryParameters = [])
    {
        $this->body = $body;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/dpNatProfiles';
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\AddDpNatProfilesBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\AddDpNatProfilesForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\AddDpNatProfilesInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\AddDpNatProfilesUnprocessableEntityException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfileBasicBO
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\AddDpNatProfilesBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\AddDpNatProfilesForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\AddDpNatProfilesInternalServerErrorException($response);
        }
        if (422 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\AddDpNatProfilesUnprocessableEntityException($response);
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