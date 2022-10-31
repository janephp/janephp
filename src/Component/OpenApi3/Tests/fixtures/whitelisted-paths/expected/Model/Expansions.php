<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Expansions extends \ArrayObject
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
     * 
     *
     * @var mixed[]
     */
    protected $users;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $tweets;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $places;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $media;
    /**
     * 
     *
     * @var Poll[]
     */
    protected $polls;
    /**
     * 
     *
     * @return mixed[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * 
     *
     * @param mixed[] $users
     *
     * @return self
     */
    public function setUsers(array $users) : self
    {
        $this->initialized['users'] = true;
        $this->users = $users;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getTweets() : array
    {
        return $this->tweets;
    }
    /**
     * 
     *
     * @param mixed[] $tweets
     *
     * @return self
     */
    public function setTweets(array $tweets) : self
    {
        $this->initialized['tweets'] = true;
        $this->tweets = $tweets;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getPlaces() : array
    {
        return $this->places;
    }
    /**
     * 
     *
     * @param mixed[] $places
     *
     * @return self
     */
    public function setPlaces(array $places) : self
    {
        $this->initialized['places'] = true;
        $this->places = $places;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getMedia() : array
    {
        return $this->media;
    }
    /**
     * 
     *
     * @param mixed[] $media
     *
     * @return self
     */
    public function setMedia(array $media) : self
    {
        $this->initialized['media'] = true;
        $this->media = $media;
        return $this;
    }
    /**
     * 
     *
     * @return Poll[]
     */
    public function getPolls() : array
    {
        return $this->polls;
    }
    /**
     * 
     *
     * @param Poll[] $polls
     *
     * @return self
     */
    public function setPolls(array $polls) : self
    {
        $this->initialized['polls'] = true;
        $this->polls = $polls;
        return $this;
    }
}