<?php

namespace Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Endpoint;

class ListSponsoredProductsCampaigns extends \Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Runtime\Client\Endpoint
{
    /**
     * List campaigns
     *
     * **Requires one of these permissions**:
     * ["advertiser_campaign_edit","advertiser_campaign_view"]
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent $requestBody
     * @param array{
     *    "Amazon-Advertising-API-ClientId": string, //The identifier of a client associated with a "Login with Amazon" account.
     *    "Amazon-Advertising-API-Scope": string, //The identifier of a profile associated with the advertiser account. Use GET method on Profiles resource to list
     *                                            //profiles associated with the access token passed in the HTTP Authorization header.
     * } $headerParameters
     */
    public function __construct(?\Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent $requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/sp/campaigns/list';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent) {
            return [['Content-Type' => ['application/vnd.spCampaign.v3+json']], \Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.spCampaign.v3+json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Amazon-Advertising-API-ClientId', 'Amazon-Advertising-API-Scope']);
        $optionsResolver->setRequired(['Amazon-Advertising-API-ClientId', 'Amazon-Advertising-API-Scope']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-ClientId', ['string']);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-Scope', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Model\SponsoredProductsListSponsoredProductsCampaignsResponseContent
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/vnd.spcampaign.v3+json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Model\SponsoredProductsListSponsoredProductsCampaignsResponseContent', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}