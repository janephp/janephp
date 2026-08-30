<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Endpoint;

class FindRkszonesApgroupsApmodelByModel extends \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\Endpoint
{
    protected $zoneId;
    protected $id;
    protected $model;
    /**
     * @param string $zoneId
     * @param string $id
     * @param string $model
     * @param array $queryParameters {
     *     @var string $serviceTicket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
     * }
     */
    public function __construct(string $zoneId, string $id, string $model, array $queryParameters = [])
    {
        $this->zoneId = $zoneId;
        $this->id = $id;
        $this->model = $model;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{zoneId}', '{id}', '{model}'], [rawurlencode($this->zoneId), rawurlencode($this->id), rawurlencode($this->model)], '/rkszones/{zoneId}/apgroups/{id}/apmodel/{model}');
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindRkszonesApgroupsApmodelByModelBadRequestException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindRkszonesApgroupsApmodelByModelForbiddenException
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindRkszonesApgroupsApmodelByModelInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApmodelApModel
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindRkszonesApgroupsApmodelByModelBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindRkszonesApgroupsApmodelByModelForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception\FindRkszonesApgroupsApmodelByModelInternalServerErrorException($response);
        }
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApmodelApModel', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}