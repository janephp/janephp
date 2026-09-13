<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
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