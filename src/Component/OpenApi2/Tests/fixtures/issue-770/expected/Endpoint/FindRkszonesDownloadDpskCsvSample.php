<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Endpoint;

class FindRkszonesDownloadDpskCsvSample extends \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     *     @var string $type DPSK CSV sample type. Valid value is PHASE1 or PHASE2. Default: PHASE2.
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
        return '/rkszones/downloadDpskCsvSample';
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
        $optionsResolver->setRequired(['serviceTicket']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('serviceTicket', ['string']);
        $optionsResolver->addAllowedTypes('type', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindRkszonesDownloadDpskCsvSampleBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindRkszonesDownloadDpskCsvSampleForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindRkszonesDownloadDpskCsvSampleInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindRkszonesDownloadDpskCsvSampleBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindRkszonesDownloadDpskCsvSampleForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindRkszonesDownloadDpskCsvSampleInternalServerErrorException($response);
        }
        if (200 === $status) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                return $decodedBody;
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}