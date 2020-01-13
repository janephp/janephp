<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DetailedTweetFieldsStats
{
    /**
     * Number of times this Tweet has been Retweeted.
     *
     * @var int
     */
    protected $retweetCount;
    /**
     * Number of times this Tweet has been replied to.
     *
     * @var int
     */
    protected $replyCount;
    /**
     * Number of times this Tweet has been liked.
     *
     * @var int
     */
    protected $likeCount;
    /**
     * Number of times this Tweet has been quoted.
     *
     * @var int
     */
    protected $quoteCount;
    /**
     * Number of times this Tweet has been Retweeted.
     *
     * @return int
     */
    public function getRetweetCount() : int
    {
        return $this->retweetCount;
    }
    /**
     * Number of times this Tweet has been Retweeted.
     *
     * @param int $retweetCount
     *
     * @return self
     */
    public function setRetweetCount(int $retweetCount) : self
    {
        $this->retweetCount = $retweetCount;
        return $this;
    }
    /**
     * Number of times this Tweet has been replied to.
     *
     * @return int
     */
    public function getReplyCount() : int
    {
        return $this->replyCount;
    }
    /**
     * Number of times this Tweet has been replied to.
     *
     * @param int $replyCount
     *
     * @return self
     */
    public function setReplyCount(int $replyCount) : self
    {
        $this->replyCount = $replyCount;
        return $this;
    }
    /**
     * Number of times this Tweet has been liked.
     *
     * @return int
     */
    public function getLikeCount() : int
    {
        return $this->likeCount;
    }
    /**
     * Number of times this Tweet has been liked.
     *
     * @param int $likeCount
     *
     * @return self
     */
    public function setLikeCount(int $likeCount) : self
    {
        $this->likeCount = $likeCount;
        return $this;
    }
    /**
     * Number of times this Tweet has been quoted.
     *
     * @return int
     */
    public function getQuoteCount() : int
    {
        return $this->quoteCount;
    }
    /**
     * Number of times this Tweet has been quoted.
     *
     * @param int $quoteCount
     *
     * @return self
     */
    public function setQuoteCount(int $quoteCount) : self
    {
        $this->quoteCount = $quoteCount;
        return $this;
    }
}