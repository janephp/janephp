<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Endpoint;

class FindIdentityGuestpass extends \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     *     @var string $index The index of the first entry to be retrieved. Default: 0
     *     @var string $listSize The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
     *     @var string $timeZone Display created date and time by specified time zone. Default is UTC.
     *     @var string $wlan filter identity guest pass list by wlan id.
     *     @var string $displayName filter identity guest pass list by display name.
     *     @var string $expirationFrom filter identity guest pass list by expiration date and time. The start time of expiration date and time.The format is yyyy-MM-dd HH:mm:ss.
     *     @var string $expirationTo filter identity guest pass list by expiration date and time. The end time of expiration date and time.The format is yyyy-MM-dd HH:mm:ss.
     *     @var string $generatedTimeFrom filter identity guest pass list by generated date and time. The start time of generated date and time.The format is yyyy-MM-dd HH:mm:ss.
     *     @var string $generatedTimeTo filter identity guest pass list by generated date and time. The end time of generated date and time.The format is yyyy-MM-dd HH:mm:ss.
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
        return '/identity/guestpass';
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
        $optionsResolver->setDefined(['serviceTicket', 'index', 'listSize', 'timeZone', 'wlan', 'displayName', 'expirationFrom', 'expirationTo', 'generatedTimeFrom', 'generatedTimeTo']);
        $optionsResolver->setRequired(['serviceTicket']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('serviceTicket', ['string']);
        $optionsResolver->addAllowedTypes('index', ['string']);
        $optionsResolver->addAllowedTypes('listSize', ['string']);
        $optionsResolver->addAllowedTypes('timeZone', ['string']);
        $optionsResolver->addAllowedTypes('wlan', ['string']);
        $optionsResolver->addAllowedTypes('displayName', ['string']);
        $optionsResolver->addAllowedTypes('expirationFrom', ['string']);
        $optionsResolver->addAllowedTypes('expirationTo', ['string']);
        $optionsResolver->addAllowedTypes('generatedTimeFrom', ['string']);
        $optionsResolver->addAllowedTypes('generatedTimeTo', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindIdentityGuestpassBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindIdentityGuestpassForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindIdentityGuestpassInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityIdentityGuestPassList
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindIdentityGuestpassBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindIdentityGuestpassForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindIdentityGuestpassInternalServerErrorException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityIdentityGuestPassList', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}