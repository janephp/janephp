<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Endpoint;

class FindProfilesAuthAuthorizationList extends \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     *     @var string $type
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/profiles/auth/authorizationList';
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
        $optionsResolver->setDefined(['serviceTicket', 'type']);
        $optionsResolver->setRequired(['serviceTicket', 'type']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('serviceTicket', ['string']);
        $optionsResolver->addAllowedTypes('type', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindProfilesAuthAuthorizationListBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindProfilesAuthAuthorizationListForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindProfilesAuthAuthorizationListInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBaseServiceInfoList
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindProfilesAuthAuthorizationListBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindProfilesAuthAuthorizationListForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindProfilesAuthAuthorizationListInternalServerErrorException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBaseServiceInfoList', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}