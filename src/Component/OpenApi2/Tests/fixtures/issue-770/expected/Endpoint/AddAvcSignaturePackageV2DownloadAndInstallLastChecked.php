<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class AddAvcSignaturePackageV2DownloadAndInstallLastChecked extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/avc/signaturePackageV2/downloadAndInstallLastChecked';
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
        $optionsResolver->setDefined(['serviceTicket']);
        $optionsResolver->setRequired(['serviceTicket']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('serviceTicket', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddAvcSignaturePackageV2DownloadAndInstallLastCheckedBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddAvcSignaturePackageV2DownloadAndInstallLastCheckedForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddAvcSignaturePackageV2DownloadAndInstallLastCheckedInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddAvcSignaturePackageV2DownloadAndInstallLastCheckedUnprocessableEntityException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\AvcDownloadLatestInstallableSignaturePackage
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddAvcSignaturePackageV2DownloadAndInstallLastCheckedBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddAvcSignaturePackageV2DownloadAndInstallLastCheckedForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddAvcSignaturePackageV2DownloadAndInstallLastCheckedInternalServerErrorException($response);
        }
        if (422 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddAvcSignaturePackageV2DownloadAndInstallLastCheckedUnprocessableEntityException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\AvcDownloadLatestInstallableSignaturePackage', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}