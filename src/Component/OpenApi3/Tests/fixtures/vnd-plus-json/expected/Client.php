<?php

namespace Jane\Component\OpenApi3\Tests\Expected\VndPlusJson;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Runtime\Client\Client
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
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Model\SponsoredProductsListSponsoredProductsCampaignsResponseContent
     */
    public function listSponsoredProductsCampaigns(?\Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent $requestBody = null, array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Endpoint\ListSponsoredProductsCampaigns($requestBody, $headerParameters));
    }
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        $plugins = [];
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}