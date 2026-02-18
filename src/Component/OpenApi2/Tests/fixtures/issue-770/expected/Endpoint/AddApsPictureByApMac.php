<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class AddApsPictureByApMac extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $apMac;
    /**
     * @param string $apMac
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $uploadFile The file to upload
     * }
     */
    public function __construct(string $apMac, array $queryParameters = [], array $formParameters = [])
    {
        $this->apMac = $apMac;
        $this->queryParameters = $queryParameters;
        $this->formParameters = $formParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{apMac}'], [$this->apMac], '/aps/{apMac}/picture');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getMultipartBody($streamFactory);
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
    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['uploadFile']);
        $optionsResolver->setRequired(['uploadFile']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('uploadFile', ['string', 'resource', '\Psr\Http\Message\StreamInterface']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsPictureByApMacBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsPictureByApMacForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsPictureByApMacInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsPictureByApMacUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsPictureByApMacBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsPictureByApMacForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsPictureByApMacInternalServerErrorException($response);
        }
        if (422 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\AddApsPictureByApMacUnprocessableEntityException($response);
        }
        if (204 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}