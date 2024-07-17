<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class ListSponsoredProductsCampaigns extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    /**
    * List campaigns
    
    **Requires one of these permissions**:
    ["advertiser_campaign_edit","advertiser_campaign_view"]
    *
    * @param null|\Jane\Component\OpenApi3\Tests\Expected\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent $requestBody 
    * @param array $headerParameters {
    *     @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account.
    *     @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use GET method on Profiles resource to list
    profiles associated with the access token passed in the HTTP Authorization header.
    * }
    */
    public function __construct(?\Jane\Component\OpenApi3\Tests\Expected\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent $requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/sp/campaigns/list';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent) {
            return [['Content-Type' => ['application/vnd.spCampaign.v3+json']], $this->body];
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
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\SponsoredProductsListSponsoredProductsCampaignsResponseContent
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/vnd.spCampaign.v3+json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\SponsoredProductsListSponsoredProductsCampaignsResponseContent', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}