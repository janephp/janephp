<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Endpoint;

class UpdateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId extends \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\Endpoint
{
    protected $id;
    protected $spaceId;
    /**
     * @param string $id
     * @param string $spaceId
     * @param \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileOptionSpaceBO $body
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $id, string $spaceId, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileOptionSpaceBO $body, array $queryParameters = [])
    {
        $this->id = $id;
        $this->spaceId = $spaceId;
        $this->body = $body;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{id}', '{spaceId}'], [rawurlencode($this->id), rawurlencode($this->spaceId)], '/dpDhcpProfiles/{id}/dpDhcpProfileOptionSpaces/{spaceId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedObjectBody($serializer);
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceIdForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceIdInternalServerErrorException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceIdUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceIdBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceIdInternalServerErrorException($response);
        }
        if (422 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\UpdateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceIdUnprocessableEntityException($response);
        }
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}