<?php

namespace Jane\OpenApi3\Tests\Expected\Model;

class Expansions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var list<mixed>
     */
    protected $users;
    /**
     * 
     *
     * @var list<mixed>
     */
    protected $tweets;
    /**
     * 
     *
     * @var list<mixed>
     */
    protected $places;
    /**
     * 
     *
     * @var list<mixed>
     */
    protected $media;
    /**
     * 
     *
     * @var list<Poll>
     */
    protected $polls;
    /**
     * 
     *
     * @return list<mixed>
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * 
     *
     * @param list<mixed> $users
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
     * @return list<mixed>
     */
    public function getTweets() : array
    {
        return $this->tweets;
    }
    /**
     * 
     *
     * @param list<mixed> $tweets
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
     * @return list<mixed>
     */
    public function getPlaces() : array
    {
        return $this->places;
    }
    /**
     * 
     *
     * @param list<mixed> $places
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
     * @return list<mixed>
     */
    public function getMedia() : array
    {
        return $this->media;
    }
    /**
     * 
     *
     * @param list<mixed> $media
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
     * @return list<Poll>
     */
    public function getPolls() : array
    {
        return $this->polls;
    }
    /**
     * 
     *
     * @param list<Poll> $polls
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