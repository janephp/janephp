<?php

namespace Jane\OpenApi3\Tests\Expected\Model;

use Jane\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Expansions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<CompactUser>|list<DefaultUser>|list<DetailedUser>
     */
    protected $users;
    /**
     * @var list<CompactTweet>|list<DefaultTweet>|list<DetailedTweet>
     */
    protected $tweets;
    /**
     * @var list<CompactPlace>|list<DefaultPlace>|list<DetailedPlace>
     */
    protected $places;
    /**
     * @var list<Photo>|list<Video>|list<AnimatedGif>
     */
    protected $media;
    /**
     * @var list<Poll>
     */
    protected $polls;
    /**
     * @return list<CompactUser>|list<DefaultUser>|list<DetailedUser>
     */
    public function getUsers(): array
    {
        return $this->users;
    }
    /**
     * @param list<CompactUser>|list<DefaultUser>|list<DetailedUser> $users
     *
     * @return self
     */
    public function setUsers(array $users): self
    {
        $this->initialized['users'] = true;
        $this->users = $users;
        return $this;
    }
    /**
     * @return list<CompactTweet>|list<DefaultTweet>|list<DetailedTweet>
     */
    public function getTweets(): array
    {
        return $this->tweets;
    }
    /**
     * @param list<CompactTweet>|list<DefaultTweet>|list<DetailedTweet> $tweets
     *
     * @return self
     */
    public function setTweets(array $tweets): self
    {
        $this->initialized['tweets'] = true;
        $this->tweets = $tweets;
        return $this;
    }
    /**
     * @return list<CompactPlace>|list<DefaultPlace>|list<DetailedPlace>
     */
    public function getPlaces(): array
    {
        return $this->places;
    }
    /**
     * @param list<CompactPlace>|list<DefaultPlace>|list<DetailedPlace> $places
     *
     * @return self
     */
    public function setPlaces(array $places): self
    {
        $this->initialized['places'] = true;
        $this->places = $places;
        return $this;
    }
    /**
     * @return list<Photo>|list<Video>|list<AnimatedGif>
     */
    public function getMedia(): array
    {
        return $this->media;
    }
    /**
     * @param list<Photo>|list<Video>|list<AnimatedGif> $media
     *
     * @return self
     */
    public function setMedia(array $media): self
    {
        $this->initialized['media'] = true;
        $this->media = $media;
        return $this;
    }
    /**
     * @return list<Poll>
     */
    public function getPolls(): array
    {
        return $this->polls;
    }
    /**
     * @param list<Poll> $polls
     *
     * @return self
     */
    public function setPolls(array $polls): self
    {
        $this->initialized['polls'] = true;
        $this->polls = $polls;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['users' => ['users', 'getUsers', 'setUsers'], 'tweets' => ['tweets', 'getTweets', 'setTweets'], 'places' => ['places', 'getPlaces', 'setPlaces'], 'media' => ['media', 'getMedia', 'setMedia'], 'polls' => ['polls', 'getPolls', 'setPolls']];
    }
}