<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class FindIdentityUsers extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     *     @var string $index The index of the first entry to be retrieved. Default: 0
     *     @var string $listSize The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
     *     @var string $timeZone Display created date and time by specified time zone. Default is UTC.
     *     @var string $userName filter identity user list by user name.
     *     @var string $displayName filter identity user list by display name.
     *     @var string $firstName filter identity user list by first name.
     *     @var string $lastName filter identity user list by last name.
     *     @var string $email filter identity user list by email.
     *     @var string $phone filter identity user list by phone.
     *     @var string $userType filter identity user list by user type.
     *     @var string $userSource filter identity user list by user source.
     *     @var string $isDisabled filter identity user list by isDisabled.
     *     @var string $createdOnFrom filter identity user list by created date and time. The start time of created date and time.
     *     @var string $createdOnTo filter identity user list by created date and time. The end time of created date and time.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/identity/users';
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
        $optionsResolver->setDefined(['serviceTicket', 'index', 'listSize', 'timeZone', 'userName', 'displayName', 'firstName', 'lastName', 'email', 'phone', 'userType', 'userSource', 'isDisabled', 'createdOnFrom', 'createdOnTo']);
        $optionsResolver->setRequired(['serviceTicket']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('serviceTicket', ['string']);
        $optionsResolver->addAllowedTypes('index', ['string']);
        $optionsResolver->addAllowedTypes('listSize', ['string']);
        $optionsResolver->addAllowedTypes('timeZone', ['string']);
        $optionsResolver->addAllowedTypes('userName', ['string']);
        $optionsResolver->addAllowedTypes('displayName', ['string']);
        $optionsResolver->addAllowedTypes('firstName', ['string']);
        $optionsResolver->addAllowedTypes('lastName', ['string']);
        $optionsResolver->addAllowedTypes('email', ['string']);
        $optionsResolver->addAllowedTypes('phone', ['string']);
        $optionsResolver->addAllowedTypes('userType', ['string']);
        $optionsResolver->addAllowedTypes('userSource', ['string']);
        $optionsResolver->addAllowedTypes('isDisabled', ['string']);
        $optionsResolver->addAllowedTypes('createdOnFrom', ['string']);
        $optionsResolver->addAllowedTypes('createdOnTo', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindIdentityUsersBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindIdentityUsersForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindIdentityUsersInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUserList
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindIdentityUsersBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindIdentityUsersForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindIdentityUsersInternalServerErrorException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUserList', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}