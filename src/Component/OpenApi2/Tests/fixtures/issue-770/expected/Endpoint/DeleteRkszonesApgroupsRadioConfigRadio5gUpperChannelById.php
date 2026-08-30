<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Endpoint;

class DeleteRkszonesApgroupsRadioConfigRadio5gUpperChannelById extends \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\Endpoint
{
    protected $zoneId;
    protected $id;
    /**
     * @param string $zoneId
     * @param string $id
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $zoneId, string $id, array $queryParameters = [])
    {
        $this->zoneId = $zoneId;
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{zoneId}', '{id}'], [rawurlencode($this->zoneId), rawurlencode($this->id)], '/rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gUpper/channel');
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\DeleteRkszonesApgroupsRadioConfigRadio5gUpperChannelByIdBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\DeleteRkszonesApgroupsRadioConfigRadio5gUpperChannelByIdForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\DeleteRkszonesApgroupsRadioConfigRadio5gUpperChannelByIdInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonEmptyResult
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\DeleteRkszonesApgroupsRadioConfigRadio5gUpperChannelByIdBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\DeleteRkszonesApgroupsRadioConfigRadio5gUpperChannelByIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\DeleteRkszonesApgroupsRadioConfigRadio5gUpperChannelByIdInternalServerErrorException($response);
        }
        if (204 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonEmptyResult', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}