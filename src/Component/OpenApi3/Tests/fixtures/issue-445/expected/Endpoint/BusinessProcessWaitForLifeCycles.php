<?php

namespace PicturePark\API\Endpoint;

class BusinessProcessWaitForLifeCycles extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Wait for the business process to hit one of the given life cycles.
     * @param string $id The business process id.
     * @param array{
     *    "lifeCycles"?: array, //Business process life cycles to wait for.
     *    "timeout"?: string, //The timeout to wait for completion.
     * } $queryParameters
     */
    public function __construct(string $id, array $queryParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [rawurlencode($this->id)], '/v1/BusinessProcesses/{id}/waitLifeCycles');
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
        $optionsResolver->setDefined(['lifeCycles', 'timeout']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('lifeCycles', ['array', 'null']);
        $optionsResolver->addAllowedTypes('timeout', ['string', 'null']);
        return $optionsResolver;
    }
    protected function getQueryStyles(): array
    {
        return ['lifeCycles' => ['style' => 'form', 'explode' => true]];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['Bearer'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}