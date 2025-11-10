<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class FindApplicationsDownloadByBladeUUID extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $bladeUUID;
    /**
     * @param string $bladeUUID
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     *     @var string $appName Download all logs of the specified application name.
     *     @var string $logFileName Download log of the specified log file name.
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
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{bladeUUID}'], [$this->bladeUUID], '/applications/download/{bladeUUID}');
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
        $optionsResolver->setDefined(['serviceTicket', 'appName', 'logFileName']);
        $optionsResolver->setRequired(['serviceTicket', 'appName']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('serviceTicket', ['string']);
        $optionsResolver->addAllowedTypes('appName', ['string']);
        $optionsResolver->addAllowedTypes('logFileName', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindApplicationsDownloadByBladeUUIDBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindApplicationsDownloadByBladeUUIDForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\FindApplicationsDownloadByBladeUUIDInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindApplicationsDownloadByBladeUUIDBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindApplicationsDownloadByBladeUUIDForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\FindApplicationsDownloadByBladeUUIDInternalServerErrorException($response);
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