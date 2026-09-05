<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Endpoint;

class FindIdentityUsers extends \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\Endpoint
{
    /**
     * @param array{
     *    "serviceTicket": string, //Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     *    "index"?: string, //The index of the first entry to be retrieved. Default: 0
     *    "listSize"?: string, //The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
     *    "timeZone"?: string, //Display created date and time by specified time zone. Default is UTC.
     *    "userName"?: string, //filter identity user list by user name.
     *    "displayName"?: string, //filter identity user list by display name.
     *    "firstName"?: string, //filter identity user list by first name.
     *    "lastName"?: string, //filter identity user list by last name.
     *    "email"?: string, //filter identity user list by email.
     *    "phone"?: string, //filter identity user list by phone.
     *    "userType"?: string, //filter identity user list by user type.
     *    "userSource"?: string, //filter identity user list by user source.
     *    "isDisabled"?: string, //filter identity user list by isDisabled.
     *    "createdOnFrom"?: string, //filter identity user list by created date and time. The start time of created date and time.
     *    "createdOnTo"?: string, //filter identity user list by created date and time. The end time of created date and time.
     * } $queryParameters
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
        return '/identity/users';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindIdentityUsersBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindIdentityUsersForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindIdentityUsersInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUserList
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindIdentityUsersBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindIdentityUsersForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindIdentityUsersInternalServerErrorException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUserList', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}