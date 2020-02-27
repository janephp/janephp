<?php

namespace Jane\OpenApi\Tests\Expected;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * This endpoint returns information about users. You can specify users by their ID or screen name, or by a combination of the two.
     *
     * @param array $queryParameters {
     *     @var array $ids Required (unless using `usernames`). A list of User IDs, comma-separated. You can specify up to 100 IDs.
     *     @var array $usernames Required (unless using `ids`). A list of Twitter handles, comma-separated. You can specify up to 100 values.
     *     @var string $format Format for all the objects returned as part of the response, including expansions.
     *     @var string $tweet.format Format for all [Tweet](#Tweet) objects returned in response. Can be used together with other format parameters to expand or reduce Tweet objects only.
     *     @var string $user.format Format for all [User](#User) objects returned in response. Can be used together with other format parameters to expand or reduce User objects only.
     *     @var string $place.format Format for all place objects returned in response.
     *     @var array $expansions A comma separated list of fields to expand.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\UserLookupResponse|\Jane\OpenApi\Tests\Expected\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function findUsersByIdOrUsername(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\FindUsersByIdOrUsername($queryParameters), $fetch);
    }
    /**
     * Returns a variety of information about the Tweet specified by the requested ID
     *
     * @param array $queryParameters {
     *     @var array $ids A comma separated list of Tweet IDs. Up to 100 are allowed in a single request.
     *     @var string $format Format for all the objects returned as part of the response, including expansions.
     *     @var string $tweet.format Format for all [Tweet](#Tweet) objects returned in response. Can be used together with other format parameters to expand or reduce Tweet objects only.
     *     @var string $user.format Format for all [User](#User) objects returned in response. Can be used together with other format parameters to expand or reduce User objects only.
     *     @var string $place.format Format for all place objects returned in response.
     *     @var array $expansions A comma separated list of fields to expand.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\TweetLookupResponse|\Jane\OpenApi\Tests\Expected\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function findTweetsById(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\FindTweetsById($queryParameters), $fetch);
    }
    /**
     * Tweet ID in the path is that of the reply to hide.
     *
     * @param string $id The ID of the reply that you want to hide.
     * @param \Jane\OpenApi\Tests\Expected\Model\HideReplyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\HideReplyResponse|\Jane\OpenApi\Tests\Expected\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function hideReplyById(string $id, \Jane\OpenApi\Tests\Expected\Model\HideReplyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\HideReplyById($id, $requestBody), $fetch);
    }
    /**
     * Returns various metrics about a Tweet, including metrics for an embedded Video if one exists
     *
     * @param array $queryParameters {
     *     @var array $ids A comma separated list of Tweet IDs. Up to 50 are allowed in a single request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\TweetMetricsResponse|\Jane\OpenApi\Tests\Expected\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function findPrivateTweetMetricsById(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\FindPrivateTweetMetricsById($queryParameters), $fetch);
    }
    /**
     * Returns Tweets from the last 7 days that match a search query.
     *
     * @param array $queryParameters {
     *     @var string $query One query/rule/filter for matching Tweets. Up to 512 characters.
     *     @var string $start_time YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp (from most recent 7 days) from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute).
     *     @var string $end_time YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute).
     *     @var string $since_id Returns results with a Tweet ID greater than (that is, more recent than) the specified ID.
     *     @var string $until_id Returns results with a Tweet ID less than (that is, older than) the specified ID.
     *     @var int $max_results The maximum number of search results to be returned by a request.
     *     @var string $next_token This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
     *     @var string $format Format for all the objects returned as part of the response, including expansions.
     *     @var string $tweet.format Format for all [Tweet](#Tweet) objects returned in response. Can be used together with other format parameters to expand or reduce Tweet objects only.
     *     @var string $user.format Format for all [User](#User) objects returned in response. Can be used together with other format parameters to expand or reduce User objects only.
     *     @var string $place.format Format for all place objects returned in response.
     *     @var array $expansions A comma separated list of fields to expand.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\TweetSearchResponse|\Jane\OpenApi\Tests\Expected\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function tweetsRecentSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\TweetsRecentSearch($queryParameters), $fetch);
    }
    /**
     * Returns rules from a user's active rule set. Users can fetch all of their rules or a subset, specified by the provided rule ids.
     *
     * @param array $queryParameters {
     *     @var array $ids A comma-separated list of Rule IDs.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\GetRulesResponse|\Jane\OpenApi\Tests\Expected\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getRules(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\GetRules($queryParameters), $fetch);
    }
    /**
     * Add or delete rules from a user's active rule set. Users can provide unique, optionally tagged rules to add. Users can delete their entire rule set or a subset specified by rule ids or values.
     *
     * @param mixed $requestBody 
     * @param array $queryParameters {
     *     @var bool $dry_run Dry Run can be used with both the add and delete action, with the expected result given, but without actually taking any action in the system (meaning the end state will always be as it was when the request was submitted). This is particularly useful to validate rule changes.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function addOrDeleteRules($requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\AddOrDeleteRules($requestBody, $queryParameters), $fetch);
    }
    /**
     * Streams tweets matching a user's active rule set.
     *
     * @param array $queryParameters {
     *     @var array $expansions A comma-separated list of tweet expansions.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function streamFilter(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\StreamFilter($queryParameters), $fetch);
    }
    /**
     * Streams a deterministic 1% of public tweets.
     *
     * @param array $queryParameters {
     *     @var array $expansions A comma-separated list of tweet expansions.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function streamSample(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\StreamSample($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApiSpec(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Jane\OpenApi\Tests\Expected\Endpoint\GetOpenApiSpec(), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri('https://api.twitter.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\OpenApi\Tests\Expected\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}