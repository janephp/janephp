<?php

namespace Jane\Component\OpenApi3\Tests\Expected;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Client
{
    /**
     * This endpoint returns information about users. You can specify users by their ID or screen name, or by a combination of the two.
     * @param array{
     *    "ids"?: array, //Required (unless using `usernames`). A list of User IDs, comma-separated. You can specify up to 100 IDs.
     *    "usernames"?: array, //Required (unless using `ids`). A list of Twitter handles, comma-separated. You can specify up to 100 values.
     *    "format"?: string, //Format for all the objects returned as part of the response, including expansions.
     *    "tweet.format"?: string, //Format for all [Tweet](#Tweet) objects returned in response. Can be used together with other format parameters to expand or reduce Tweet objects only.
     *    "user.format"?: string, //Format for all [User](#User) objects returned in response. Can be used together with other format parameters to expand or reduce User objects only.
     *    "place.format"?: string, //Format for all place objects returned in response.
     *    "expansions"?: array, //A comma separated list of fields to expand.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi3\Tests\Expected\Model\UserLookupResponse|\Jane\Component\OpenApi3\Tests\Expected\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function findUsersByIdOrUsername(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\FindUsersByIdOrUsername($queryParameters, $accept), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi3\Tests\Expected\Model\TweetLookupResponse|\Jane\Component\OpenApi3\Tests\Expected\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function findTweetsById(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\FindTweetsById($queryParameters, $accept), $fetch);
    }
    /**
     * Tweet ID in the path is that of the reply to hide.
     * @param string $id The ID of the reply that you want to hide.
     * @param null|\Jane\Component\OpenApi3\Tests\Expected\Model\HideReplyRequest $requestBody
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi3\Tests\Expected\Model\HideReplyResponse|\Jane\Component\OpenApi3\Tests\Expected\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function hideReplyById(string $id, ?\Jane\Component\OpenApi3\Tests\Expected\Model\HideReplyRequest $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\HideReplyById($id, $requestBody, $accept), $fetch);
    }
    /**
     * Returns various metrics about a Tweet, including metrics for an embedded Video if one exists
     * @param array{
     *    "ids": array, //A comma separated list of Tweet IDs. Up to 50 are allowed in a single request.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi3\Tests\Expected\Model\TweetMetricsResponse|\Jane\Component\OpenApi3\Tests\Expected\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function findPrivateTweetMetricsById(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\FindPrivateTweetMetricsById($queryParameters, $accept), $fetch);
    }
    /**
     * Returns Tweets from the last 7 days that match a search query.
     * @param array{
     *    "query": string, //One query/rule/filter for matching Tweets. Up to 512 characters.
     *    "start_time"?: string, //YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp (from most recent 7 days) from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute).
     *    "end_time"?: string, //YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute).
     *    "since_id"?: string, //Returns results with a Tweet ID greater than (that is, more recent than) the specified ID.
     *    "until_id"?: string, //Returns results with a Tweet ID less than (that is, older than) the specified ID.
     *    "max_results"?: int, //The maximum number of search results to be returned by a request.
     *    "next_token"?: string, //This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
     *    "format"?: string, //Format for all the objects returned as part of the response, including expansions.
     *    "tweet.format"?: string, //Format for all [Tweet](#Tweet) objects returned in response. Can be used together with other format parameters to expand or reduce Tweet objects only.
     *    "user.format"?: string, //Format for all [User](#User) objects returned in response. Can be used together with other format parameters to expand or reduce User objects only.
     *    "place.format"?: string, //Format for all place objects returned in response.
     *    "expansions"?: array, //A comma separated list of fields to expand.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi3\Tests\Expected\Model\TweetSearchResponse|\Jane\Component\OpenApi3\Tests\Expected\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function tweetsRecentSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\TweetsRecentSearch($queryParameters, $accept), $fetch);
    }
    /**
     * Returns rules from a user's active rule set. Users can fetch all of their rules or a subset, specified by the provided rule ids.
     * @param array{
     *    "ids"?: array, //A comma-separated list of Rule IDs.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi3\Tests\Expected\Model\GetRulesResponse|\Jane\Component\OpenApi3\Tests\Expected\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function getRules(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetRules($queryParameters, $accept), $fetch);
    }
    /**
     * Add or delete rules from a user's active rule set. Users can provide unique, optionally tagged rules to add. Users can delete their entire rule set or a subset specified by rule ids or values.
     * @param mixed $requestBody
     * @param array{
     *    "dry_run"?: bool, //Dry Run can be used with both the add and delete action, with the expected result given, but without actually taking any action in the system (meaning the end state will always be as it was when the request was submitted). This is particularly useful to validate rule changes.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi3\Tests\Expected\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function addOrDeleteRules($requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\AddOrDeleteRules($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Streams tweets matching a user's active rule set.
     * @param array{
     *    "expansions"?: array, //A comma-separated list of tweet expansions.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi3\Tests\Expected\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function streamFilter(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\StreamFilter($queryParameters, $accept), $fetch);
    }
    /**
     * Streams a deterministic 1% of public tweets.
     * @param array{
     *    "expansions"?: array, //A comma-separated list of tweet expansions.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi3\Tests\Expected\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function streamSample(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\StreamSample($queryParameters, $accept), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getOpenApiSpec(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\GetOpenApiSpec(), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.twitter.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}