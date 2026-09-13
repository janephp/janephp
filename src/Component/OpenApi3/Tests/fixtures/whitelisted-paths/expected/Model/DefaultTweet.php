<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
class DefaultTweet implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $format;
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @var string
     */
    public string $id;
    /**
     * Creation time of the Tweet.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * The content of the Tweet.
     *
     * @var string
     */
    public string $text;
    /**
     * Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @var string
     */
    public string $authorId;
    /**
     * Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @var string
     */
    public string $inReplyToUserId;
    /**
     * A list of Tweets this Tweet refers to. For example, if the parent Tweet is a Retweet, a Quoted Tweet or a Reply, it will include the related Tweet referenced to by its parent.
     *
     * @var list<CompactTweetFieldsReferencedTweetsItem>
     */
    public array $referencedTweets;
    /**
     * Specifies the type of attachments (if any) present in this Tweet.
     *
     * @var CompactTweetFieldsAttachments
     */
    public CompactTweetFieldsAttachments $attachments;
    /**
     * Indicates withholding details for [withheld content](https://help.twitter.com/en/rules-and-policies/tweet-withheld-by-country).
     *
     * @var TweetWithheld
     */
    public TweetWithheld $withheld;
    /**
     * The location tagged on the Tweet, if the user provided one.
     *
     * @var DefaultTweetFieldsGeo
     */
    public DefaultTweetFieldsGeo $geo;
    /**
     * @var FullTextEntities
     */
    public FullTextEntities $entities;
    public function definedProperties(): array
    {
        return ['format' => 'format', 'id' => 'id', 'createdAt' => 'created_at', 'text' => 'text', 'authorId' => 'author_id', 'inReplyToUserId' => 'in_reply_to_user_id', 'referencedTweets' => 'referenced_tweets', 'attachments' => 'attachments', 'withheld' => 'withheld', 'geo' => 'geo', 'entities' => 'entities'];
    }
}