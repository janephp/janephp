<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DetailedTweet
{
    /**
     * 
     *
     * @var string
     */
    protected $format;
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @var string
     */
    protected $id;
    /**
     * Creation time of the Tweet.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The content of the Tweet.
     *
     * @var string
     */
    protected $text;
    /**
     * Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @var string
     */
    protected $authorId;
    /**
     * Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @var string
     */
    protected $inReplyToUserId;
    /**
     * A list of Tweets this Tweet refers to. For example, if the parent Tweet is a Retweet, a Quoted Tweet or a Reply, it will include the related Tweet referenced to by its parent.
     *
     * @var CompactTweetFieldsReferencedTweetsItem[]
     */
    protected $referencedTweets;
    /**
     * Specifies the type of attachments (if any) present in this Tweet.
     *
     * @var CompactTweetFieldsAttachments
     */
    protected $attachments;
    /**
     * Indicates withholding details for [withheld content](https://help.twitter.com/en/rules-and-policies/tweet-withheld-by-country).
     *
     * @var TweetWithheld
     */
    protected $withheld;
    /**
     * The location tagged on the Tweet, if the user provided one.
     *
     * @var DefaultTweetFieldsGeo
     */
    protected $geo;
    /**
     * 
     *
     * @var FullTextEntities
     */
    protected $entities;
    /**
     * Engagement metrics for the Tweet at the time of the request.
     *
     * @var DetailedTweetFieldsStats
     */
    protected $stats;
    /**
     * 
     *
     * @var ContextAnnotation[]
     */
    protected $contextAnnotation;
    /**
     * Indicates if this Tweet contains URLs marked as sensitive, for example content suitable for mature audiences.
     *
     * @var bool
     */
    protected $possiblySensitive;
    /**
     * Language of the Tweet, if detected by Twitter. Returned as a BCP47 language tag.
     *
     * @var string
     */
    protected $lang;
    /**
     * The name of the app the user Tweeted from.
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @return string
     */
    public function getFormat() : string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format) : self
    {
        $this->format = $format;
        return $this;
    }
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Creation time of the Tweet.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Creation time of the Tweet.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The content of the Tweet.
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * The content of the Tweet.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->text = $text;
        return $this;
    }
    /**
     * Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @return string
     */
    public function getAuthorId() : string
    {
        return $this->authorId;
    }
    /**
     * Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @param string $authorId
     *
     * @return self
     */
    public function setAuthorId(string $authorId) : self
    {
        $this->authorId = $authorId;
        return $this;
    }
    /**
     * Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @return string
     */
    public function getInReplyToUserId() : string
    {
        return $this->inReplyToUserId;
    }
    /**
     * Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @param string $inReplyToUserId
     *
     * @return self
     */
    public function setInReplyToUserId(string $inReplyToUserId) : self
    {
        $this->inReplyToUserId = $inReplyToUserId;
        return $this;
    }
    /**
     * A list of Tweets this Tweet refers to. For example, if the parent Tweet is a Retweet, a Quoted Tweet or a Reply, it will include the related Tweet referenced to by its parent.
     *
     * @return CompactTweetFieldsReferencedTweetsItem[]
     */
    public function getReferencedTweets() : array
    {
        return $this->referencedTweets;
    }
    /**
     * A list of Tweets this Tweet refers to. For example, if the parent Tweet is a Retweet, a Quoted Tweet or a Reply, it will include the related Tweet referenced to by its parent.
     *
     * @param CompactTweetFieldsReferencedTweetsItem[] $referencedTweets
     *
     * @return self
     */
    public function setReferencedTweets(array $referencedTweets) : self
    {
        $this->referencedTweets = $referencedTweets;
        return $this;
    }
    /**
     * Specifies the type of attachments (if any) present in this Tweet.
     *
     * @return CompactTweetFieldsAttachments
     */
    public function getAttachments() : CompactTweetFieldsAttachments
    {
        return $this->attachments;
    }
    /**
     * Specifies the type of attachments (if any) present in this Tweet.
     *
     * @param CompactTweetFieldsAttachments $attachments
     *
     * @return self
     */
    public function setAttachments(CompactTweetFieldsAttachments $attachments) : self
    {
        $this->attachments = $attachments;
        return $this;
    }
    /**
     * Indicates withholding details for [withheld content](https://help.twitter.com/en/rules-and-policies/tweet-withheld-by-country).
     *
     * @return TweetWithheld
     */
    public function getWithheld() : TweetWithheld
    {
        return $this->withheld;
    }
    /**
     * Indicates withholding details for [withheld content](https://help.twitter.com/en/rules-and-policies/tweet-withheld-by-country).
     *
     * @param TweetWithheld $withheld
     *
     * @return self
     */
    public function setWithheld(TweetWithheld $withheld) : self
    {
        $this->withheld = $withheld;
        return $this;
    }
    /**
     * The location tagged on the Tweet, if the user provided one.
     *
     * @return DefaultTweetFieldsGeo
     */
    public function getGeo() : DefaultTweetFieldsGeo
    {
        return $this->geo;
    }
    /**
     * The location tagged on the Tweet, if the user provided one.
     *
     * @param DefaultTweetFieldsGeo $geo
     *
     * @return self
     */
    public function setGeo(DefaultTweetFieldsGeo $geo) : self
    {
        $this->geo = $geo;
        return $this;
    }
    /**
     * 
     *
     * @return FullTextEntities
     */
    public function getEntities() : FullTextEntities
    {
        return $this->entities;
    }
    /**
     * 
     *
     * @param FullTextEntities $entities
     *
     * @return self
     */
    public function setEntities(FullTextEntities $entities) : self
    {
        $this->entities = $entities;
        return $this;
    }
    /**
     * Engagement metrics for the Tweet at the time of the request.
     *
     * @return DetailedTweetFieldsStats
     */
    public function getStats() : DetailedTweetFieldsStats
    {
        return $this->stats;
    }
    /**
     * Engagement metrics for the Tweet at the time of the request.
     *
     * @param DetailedTweetFieldsStats $stats
     *
     * @return self
     */
    public function setStats(DetailedTweetFieldsStats $stats) : self
    {
        $this->stats = $stats;
        return $this;
    }
    /**
     * 
     *
     * @return ContextAnnotation[]
     */
    public function getContextAnnotation() : array
    {
        return $this->contextAnnotation;
    }
    /**
     * 
     *
     * @param ContextAnnotation[] $contextAnnotation
     *
     * @return self
     */
    public function setContextAnnotation(array $contextAnnotation) : self
    {
        $this->contextAnnotation = $contextAnnotation;
        return $this;
    }
    /**
     * Indicates if this Tweet contains URLs marked as sensitive, for example content suitable for mature audiences.
     *
     * @return bool
     */
    public function getPossiblySensitive() : bool
    {
        return $this->possiblySensitive;
    }
    /**
     * Indicates if this Tweet contains URLs marked as sensitive, for example content suitable for mature audiences.
     *
     * @param bool $possiblySensitive
     *
     * @return self
     */
    public function setPossiblySensitive(bool $possiblySensitive) : self
    {
        $this->possiblySensitive = $possiblySensitive;
        return $this;
    }
    /**
     * Language of the Tweet, if detected by Twitter. Returned as a BCP47 language tag.
     *
     * @return string
     */
    public function getLang() : string
    {
        return $this->lang;
    }
    /**
     * Language of the Tweet, if detected by Twitter. Returned as a BCP47 language tag.
     *
     * @param string $lang
     *
     * @return self
     */
    public function setLang(string $lang) : self
    {
        $this->lang = $lang;
        return $this;
    }
    /**
     * The name of the app the user Tweeted from.
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * The name of the app the user Tweeted from.
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->source = $source;
        return $this;
    }
}