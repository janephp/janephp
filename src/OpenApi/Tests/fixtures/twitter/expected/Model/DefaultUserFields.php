<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DefaultUserFields
{
    /**
     * The location specified in the user's profile, if the user provided one. As this is a freeform value, it may not indicate a valid location, but it may be fuzzily evaluated when performing searches with location queries.
     *
     * @var string
     */
    protected $location;
    /**
     * The URL specified in the user's profile.
     *
     * @var string
     */
    protected $url;
    /**
     * The text of this user's profile description (also known as bio), if the user provided one.
     *
     * @var string
     */
    protected $description;
    /**
     * A list of metadata found in the user's profile description.
     *
     * @var DefaultUserFieldsEntities
     */
    protected $entities;
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @var string
     */
    protected $mostRecentTweetId;
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @var string
     */
    protected $pinnedTweetId;
    /**
     * The location specified in the user's profile, if the user provided one. As this is a freeform value, it may not indicate a valid location, but it may be fuzzily evaluated when performing searches with location queries.
     *
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * The location specified in the user's profile, if the user provided one. As this is a freeform value, it may not indicate a valid location, but it may be fuzzily evaluated when performing searches with location queries.
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * The URL specified in the user's profile.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The URL specified in the user's profile.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * The text of this user's profile description (also known as bio), if the user provided one.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The text of this user's profile description (also known as bio), if the user provided one.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * A list of metadata found in the user's profile description.
     *
     * @return DefaultUserFieldsEntities
     */
    public function getEntities() : DefaultUserFieldsEntities
    {
        return $this->entities;
    }
    /**
     * A list of metadata found in the user's profile description.
     *
     * @param DefaultUserFieldsEntities $entities
     *
     * @return self
     */
    public function setEntities(DefaultUserFieldsEntities $entities) : self
    {
        $this->entities = $entities;
        return $this;
    }
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @return string
     */
    public function getMostRecentTweetId() : string
    {
        return $this->mostRecentTweetId;
    }
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @param string $mostRecentTweetId
     *
     * @return self
     */
    public function setMostRecentTweetId(string $mostRecentTweetId) : self
    {
        $this->mostRecentTweetId = $mostRecentTweetId;
        return $this;
    }
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @return string
     */
    public function getPinnedTweetId() : string
    {
        return $this->pinnedTweetId;
    }
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @param string $pinnedTweetId
     *
     * @return self
     */
    public function setPinnedTweetId(string $pinnedTweetId) : self
    {
        $this->pinnedTweetId = $pinnedTweetId;
        return $this;
    }
}