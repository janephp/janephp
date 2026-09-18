<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class DetailedUserFieldsStats implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Number of users who are following this user.
     *
     * @var int
     */
    public int $followersCount;
    /**
     * Number of users this user is following.
     *
     * @var int
     */
    public int $followingCount;
    /**
     * The number of Tweets (including Retweets) posted by this user.
     *
     * @var int
     */
    public int $tweetCount;
    /**
     * The number of lists that include this user.
     *
     * @var int
     */
    public int $listedCount;
    public function definedProperties(): array
    {
        return ['followersCount' => 'followers_count', 'followingCount' => 'following_count', 'tweetCount' => 'tweet_count', 'listedCount' => 'listed_count'];
    }
}