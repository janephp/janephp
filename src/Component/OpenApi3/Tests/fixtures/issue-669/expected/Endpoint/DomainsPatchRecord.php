<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DomainsPatchRecord extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $domain_name;
    protected $domain_record_id;
    /**
     * To update an existing record, send a PATCH request to
     * `/v2/domains/$DOMAIN_NAME/records/$DOMAIN_RECORD_ID`. Any attribute valid for
     * the record type can be set to a new value for the record.
     *
     * See the [attribute table](#tag/Domain-Records) for details regarding record
     * types and their respective attributes.
     *
     * @param string $domainName The name of the domain itself.
     * @param int $domainRecordId The unique identifier of the domain record.
     * @param null|\Jane\Generated\DigitalOcean\Model\DomainRecord $requestBody
     */
    public function __construct(string $domainName, int $domainRecordId, ?\Jane\Generated\DigitalOcean\Model\DomainRecord $requestBody = null)
    {
        $this->domain_name = $domainName;
        $this->domain_record_id = $domainRecordId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{domain_name}', '{domain_record_id}'], [$this->domain_name, $this->domain_record_id], '/v2/domains/{domain_name}/records/{domain_record_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\DomainRecord) {
            return [['Content-Type' => ['application/json']], \Jane\Generated\DigitalOcean\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsPatchRecordUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsPatchRecordNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsPatchRecordTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsPatchRecordInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseDomainRecord|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseDomainRecord', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DomainsPatchRecordUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DomainsPatchRecordNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DomainsPatchRecordTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DomainsPatchRecordInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}