<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Endpoint;

class GetMemberBySelector extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Endpoint
{
    protected $selector;
    protected $accept;
    /**
     * @param string $selector
     * @param array $accept Accept content header application/json;schema=member-details|application/json
     */
    public function __construct(string $selector, array $accept = [])
    {
        $this->selector = $selector;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{selector}'], [$this->selector], '/members/{selector}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json;schema=member-details', 'application/json']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\MemberDetails|\Jane\Component\OpenApi31\Tests\Expected\Model\RequestError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\MemberDetails', 'json');
        }
        if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\RequestError', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}