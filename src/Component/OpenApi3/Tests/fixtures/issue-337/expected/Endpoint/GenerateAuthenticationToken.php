<?php

namespace CreditSafe\API\Endpoint;

class GenerateAuthenticationToken extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    /**
     * Enter your username and password into the request schema to generate an Authorization Token
     * @param null|\CreditSafe\API\Model\AuthenticationRequest $requestBody
     */
    public function __construct(?\CreditSafe\API\Model\AuthenticationRequest $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/authenticate';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \CreditSafe\API\Model\AuthenticationRequest) {
            return [['Content-Type' => ['application/json']], \CreditSafe\API\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \CreditSafe\API\Exception\GenerateAuthenticationTokenUnauthorizedException
     * @throws \CreditSafe\API\Exception\GenerateAuthenticationTokenNotFoundException
     *
     * @return null|\CreditSafe\API\Model\AuthenticationSuccessResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CreditSafe\API\Model\AuthenticationSuccessResponse', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\GenerateAuthenticationTokenUnauthorizedException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                throw new \CreditSafe\API\Exception\GenerateAuthenticationTokenNotFoundException($response);
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}