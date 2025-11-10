<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class FindApsLineman extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     *     @var string $index The index of the first entry to be retrieved. Default: 0
     *     @var string $listSize The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
     *     @var string $zoneId filter AP lineman by zone. Default: current login domain
     *     @var string $domainId filter AP lineman by domain. Default: current login domain
     *     @var string $showAlarm indicate to show alarm counter. Default: true
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
        return '/aps/lineman';
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
        $optionsResolver->setDefined(['serviceTicket', 'index', 'listSize', 'zoneId', 'domainId', 'showAlarm']);
        $optionsResolver->setRequired(['serviceTicket']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('serviceTicket', ['string']);
        $optionsResolver->addAllowedTypes('index', ['string']);
        $optionsResolver->addAllowedTypes('listSize', ['string']);
        $optionsResolver->addAllowedTypes('zoneId', ['string']);
        $optionsResolver->addAllowedTypes('domainId', ['string']);
        $optionsResolver->addAllowedTypes('showAlarm', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindApsLinemanBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindApsLinemanForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindApsLinemanInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\ApApLinemanSummary
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindApsLinemanBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindApsLinemanForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindApsLinemanInternalServerErrorException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\ApApLinemanSummary', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}