<?php

namespace Jane\Component\OpenApi2\Tests\Expected;

class Client extends \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\Client
{
    /**
    * List campaigns
    
    **Requires one of these permissions**:
    ["advertiser_campaign_edit","advertiser_campaign_view"]
    *
    * @param null|\Jane\Component\OpenApi2\Tests\Expected\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent $requestBody 
    * @param array $headerParameters {
    *     @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account.
    *     @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use GET method on Profiles resource to list
    profiles associated with the access token passed in the HTTP Authorization header.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Jane\Component\OpenApi2\Tests\Expected\Model\SponsoredProductsListSponsoredProductsCampaignsResponseContent|\Psr\Http\Message\ResponseInterface
    */
    public function listSponsoredProductsCampaigns(?\Jane\Component\OpenApi2\Tests\Expected\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi2\Tests\Expected\Endpoint\ListSponsoredProductsCampaigns($requestBody, $headerParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi2\Tests\Expected\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}