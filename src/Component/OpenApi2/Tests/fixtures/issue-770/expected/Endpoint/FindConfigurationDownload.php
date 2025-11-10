<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class FindConfigurationDownload extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     *     @var string $backupUUID System configuration file uuid
     *     @var string $timeZone <font color="red">DEPRECATED</font> Time zone
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
        return '/configuration/download';
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
        $optionsResolver->setDefined(['serviceTicket', 'backupUUID', 'timeZone']);
        $optionsResolver->setRequired(['serviceTicket', 'backupUUID']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('serviceTicket', ['string']);
        $optionsResolver->addAllowedTypes('backupUUID', ['string']);
        $optionsResolver->addAllowedTypes('timeZone', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindConfigurationDownloadBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindConfigurationDownloadForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindConfigurationDownloadInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindConfigurationDownloadBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindConfigurationDownloadForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindConfigurationDownloadInternalServerErrorException($response);
        }
        if (200 === $status) {
            return json_decode($body);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}