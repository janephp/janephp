<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DetailedUserFieldsStats
{
    /**
     * Number of users who are following this user.
     *
     * @var int
     */
    protected $followersCount;
    /**
     * Number of users this user is following.
     *
     * @var int
     */
    protected $followingCount;
    /**
     * The number of Tweets (including Retweets) posted by this user.
     *
     * @var int
     */
    protected $tweetCount;
    /**
     * The number of lists that include this user.
     *
     * @var int
     */
    protected $listedCount;
    /**
     * Number of users who are following this user.
     *
     * @return int
     */
    public function getFollowersCount() : int
    {
        return $this->followersCount;
    }
    /**
     * Number of users who are following this user.
     *
     * @param int $followersCount
     *
     * @return self
     */
    public function setFollowersCount(int $followersCount) : self
    {
        $this->followersCount = $followersCount;
        return $this;
    }
    /**
     * Number of users this user is following.
     *
     * @return int
     */
    public function getFollowingCount() : int
    {
        return $this->followingCount;
    }
    /**
     * Number of users this user is following.
     *
     * @param int $followingCount
     *
     * @return self
     */
    public function setFollowingCount(int $followingCount) : self
    {
        $this->followingCount = $followingCount;
        return $this;
    }
    /**
     * The number of Tweets (including Retweets) posted by this user.
     *
     * @return int
     */
    public function getTweetCount() : int
    {
        return $this->tweetCount;
    }
    /**
     * The number of Tweets (including Retweets) posted by this user.
     *
     * @param int $tweetCount
     *
     * @return self
     */
    public function setTweetCount(int $tweetCount) : self
    {
        $this->tweetCount = $tweetCount;
        return $this;
    }
    /**
     * The number of lists that include this user.
     *
     * @return int
     */
    public function getListedCount() : int
    {
        return $this->listedCount;
    }
    /**
     * The number of lists that include this user.
     *
     * @param int $listedCount
     *
     * @return self
     */
    public function setListedCount(int $listedCount) : self
    {
        $this->listedCount = $listedCount;
        return $this;
    }
}