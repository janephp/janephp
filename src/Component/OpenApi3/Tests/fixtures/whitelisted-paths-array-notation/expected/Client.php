<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation;

class Client extends \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Client\Client
{
    /**
     * Returns a variety of information about the Tweet specified by the requested ID
     * @param array{
     *    "ids": array, //A comma separated list of Tweet IDs. Up to 100 are allowed in a single request.
     *    "format"?: string, //Format for all the objects returned as part of the response, including expansions.
     *    "tweet.format"?: string, //Format for all [Tweet](#Tweet) objects returned in response. Can be used together with other format parameters to expand or reduce Tweet objects only.
     *    "user.format"?: string, //Format for all [User](#User) objects returned in response. Can be used together with other format parameters to expand or reduce User objects only.
     *    "place.format"?: string, //Format for all place objects returned in response.
     *    "expansions"?: array, //A comma separated list of fields to expand.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     *
     * @return null|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\TweetLookupResponse|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Error
     */
    public function findTweetsById(array $queryParameters = [], array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Endpoint\FindTweetsById($queryParameters, $accept));
    }
    /**
     * Add or delete rules from a user's active rule set. Users can provide unique, optionally tagged rules to add. Users can delete their entire rule set or a subset specified by rule ids or values.
     * @param mixed $requestBody
     * @param array{
     *    "dry_run"?: bool, //Dry Run can be used with both the add and delete action, with the expected result given, but without actually taking any action in the system (meaning the end state will always be as it was when the request was submitted). This is particularly useful to validate rule changes.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     *
     * @return null|\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Error
     */
    public function addOrDeleteRules($requestBody, array $queryParameters = [], array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Endpoint\AddOrDeleteRules($requestBody, $queryParameters, $accept));
    }
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://api.twitter.com');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}