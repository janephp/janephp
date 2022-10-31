<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DetailedUserFieldsStats extends \ArrayObject
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
        $this->initialized['followersCount'] = true;
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
        $this->initialized['followingCount'] = true;
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
        $this->initialized['tweetCount'] = true;
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
        $this->initialized['listedCount'] = true;
        $this->listedCount = $listedCount;
        return $this;
    }
}