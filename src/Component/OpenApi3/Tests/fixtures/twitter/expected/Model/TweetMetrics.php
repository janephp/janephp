<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class TweetMetrics extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @var string
     */
    protected $tweetId;
    /**
     * Interaction metrics for a Tweet.
     *
     * @var TweetInteractionMetrics
     */
    protected $tweet;
    /**
     * Metrics corresponding to a Video.
     *
     * @var VideoMetrics
     */
    protected $video;
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @return string
     */
    public function getTweetId() : string
    {
        return $this->tweetId;
    }
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @param string $tweetId
     *
     * @return self
     */
    public function setTweetId(string $tweetId) : self
    {
        $this->initialized['tweetId'] = true;
        $this->tweetId = $tweetId;
        return $this;
    }
    /**
     * Interaction metrics for a Tweet.
     *
     * @return TweetInteractionMetrics
     */
    public function getTweet() : TweetInteractionMetrics
    {
        return $this->tweet;
    }
    /**
     * Interaction metrics for a Tweet.
     *
     * @param TweetInteractionMetrics $tweet
     *
     * @return self
     */
    public function setTweet(TweetInteractionMetrics $tweet) : self
    {
        $this->initialized['tweet'] = true;
        $this->tweet = $tweet;
        return $this;
    }
    /**
     * Metrics corresponding to a Video.
     *
     * @return VideoMetrics
     */
    public function getVideo() : VideoMetrics
    {
        return $this->video;
    }
    /**
     * Metrics corresponding to a Video.
     *
     * @param VideoMetrics $video
     *
     * @return self
     */
    public function setVideo(VideoMetrics $video) : self
    {
        $this->initialized['video'] = true;
        $this->video = $video;
        return $this;
    }
}