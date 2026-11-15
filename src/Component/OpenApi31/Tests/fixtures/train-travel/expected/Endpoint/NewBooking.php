<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Endpoint;

class NewBooking extends \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\Endpoint
{
    /**
     * Subscribe to new bookings being created, to update integrations for your users.  Related data is available via the links provided in the request.
     *
     * @param \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\WebhooksNewBookingPostBody $requestBody
     */
    public function __construct(\Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\WebhooksNewBookingPostBody $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/webhooks/newBooking';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\WebhooksNewBookingPostBody) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\BadResponseException
     *
     * @return null
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return null;
        }
        throw new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
    public function getTargetClass(): ?string
    {
        return null;
    }
}