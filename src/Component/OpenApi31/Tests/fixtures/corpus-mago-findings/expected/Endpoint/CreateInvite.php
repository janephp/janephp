<?php

namespace Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Endpoint;

class CreateInvite extends \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\Client\Endpoint
{
    /**
     * @param mixed|\Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Model\InviteUpload $requestBody
     */
    public function __construct($requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/invites';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Model\InviteUpload) {
            $bodyBuilder = new \Jane\Component\OpenApiRuntime\Client\MultipartStreamBuilder();
            $formParameters = $this->normalizeBody($serializer, $this->body);
            $partOptions = ['session' => ['headers' => ['Content-Type' => 'application/json']]];
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                if (is_array($value) || $value instanceof \stdClass) {
                    $value = $serializer->serialize((array) $value, 'json');
                }
                $resourceOptions = $partOptions[$key] ?? [];
                $bodyBuilder->addResource($key, $value, $resourceOptions);
            }
            return [['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')]], $bodyBuilder->build()];
        }
        if (isset($this->body)) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Model\Reactions
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Model\Reactions', 'json');
        }
        throw new \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return [];
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