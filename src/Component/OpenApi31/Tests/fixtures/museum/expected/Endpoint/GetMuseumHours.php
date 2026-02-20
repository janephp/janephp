<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Endpoint;

class GetMuseumHours extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Get upcoming museum operating hours.
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(array $accept = [])
    {
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/museum-hours';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/problem+json']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetMuseumHoursBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetMuseumHoursNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\MuseumDailyHours[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\MuseumDailyHours[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetMuseumHoursBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/problem+json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetMuseumHoursNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['MuseumPlaceholderAuth'];
    }
}