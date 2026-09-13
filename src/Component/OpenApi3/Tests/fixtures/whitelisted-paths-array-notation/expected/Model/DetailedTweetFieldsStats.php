<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class DetailedTweetFieldsStats implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Number of times this Tweet has been Retweeted.
     *
     * @var int
     */
    public int $retweetCount;
    /**
     * Number of times this Tweet has been replied to.
     *
     * @var int
     */
    public int $replyCount;
    /**
     * Number of times this Tweet has been liked.
     *
     * @var int
     */
    public int $likeCount;
    /**
     * Number of times this Tweet has been quoted.
     *
     * @var int
     */
    public int $quoteCount;
    public function definedProperties(): array
    {
        return ['retweetCount' => 'retweet_count', 'replyCount' => 'reply_count', 'likeCount' => 'like_count', 'quoteCount' => 'quote_count'];
    }
}