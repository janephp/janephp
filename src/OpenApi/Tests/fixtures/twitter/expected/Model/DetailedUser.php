<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DetailedUser
{
    /**
     * 
     *
     * @var string
     */
    protected $format;
    /**
     * Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @var string
     */
    protected $id;
    /**
     * Creation time of this user.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The friendly name of this user, as shown on their profile.
     *
     * @var string
     */
    protected $name;
    /**
     * The Twitter handle (screen name) of this user.
     *
     * @var string
     */
    protected $username;
    /**
     * Indicates if this user has chosen to protect their Tweets (in other words, if this user's Tweets are private).
     *
     * @var bool
     */
    protected $protected;
    /**
     * Indicate if this user is a verified Twitter User.
     *
     * @var bool
     */
    protected $verified;
    /**
     * Indicates withholding details for [withheld content](https://help.twitter.com/en/rules-and-policies/tweet-withheld-by-country).
     *
     * @var UserWithheld
     */
    protected $withheld;
    /**
     * The URL to the profile image for this user.
     *
     * @var string
     */
    protected $profileImageUrl;
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
     * A list of metrics for this user
     *
     * @var DetailedUserFieldsStats
     */
    protected $stats;
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
     * Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
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
     * Creation time of this user.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Creation time of this user.
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
     * The friendly name of this user, as shown on their profile.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The friendly name of this user, as shown on their profile.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The Twitter handle (screen name) of this user.
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * The Twitter handle (screen name) of this user.
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->username = $username;
        return $this;
    }
    /**
     * Indicates if this user has chosen to protect their Tweets (in other words, if this user's Tweets are private).
     *
     * @return bool
     */
    public function getProtected() : bool
    {
        return $this->protected;
    }
    /**
     * Indicates if this user has chosen to protect their Tweets (in other words, if this user's Tweets are private).
     *
     * @param bool $protected
     *
     * @return self
     */
    public function setProtected(bool $protected) : self
    {
        $this->protected = $protected;
        return $this;
    }
    /**
     * Indicate if this user is a verified Twitter User.
     *
     * @return bool
     */
    public function getVerified() : bool
    {
        return $this->verified;
    }
    /**
     * Indicate if this user is a verified Twitter User.
     *
     * @param bool $verified
     *
     * @return self
     */
    public function setVerified(bool $verified) : self
    {
        $this->verified = $verified;
        return $this;
    }
    /**
     * Indicates withholding details for [withheld content](https://help.twitter.com/en/rules-and-policies/tweet-withheld-by-country).
     *
     * @return UserWithheld
     */
    public function getWithheld() : UserWithheld
    {
        return $this->withheld;
    }
    /**
     * Indicates withholding details for [withheld content](https://help.twitter.com/en/rules-and-policies/tweet-withheld-by-country).
     *
     * @param UserWithheld $withheld
     *
     * @return self
     */
    public function setWithheld(UserWithheld $withheld) : self
    {
        $this->withheld = $withheld;
        return $this;
    }
    /**
     * The URL to the profile image for this user.
     *
     * @return string
     */
    public function getProfileImageUrl() : string
    {
        return $this->profileImageUrl;
    }
    /**
     * The URL to the profile image for this user.
     *
     * @param string $profileImageUrl
     *
     * @return self
     */
    public function setProfileImageUrl(string $profileImageUrl) : self
    {
        $this->profileImageUrl = $profileImageUrl;
        return $this;
    }
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
    /**
     * A list of metrics for this user
     *
     * @return DetailedUserFieldsStats
     */
    public function getStats() : DetailedUserFieldsStats
    {
        return $this->stats;
    }
    /**
     * A list of metrics for this user
     *
     * @param DetailedUserFieldsStats $stats
     *
     * @return self
     */
    public function setStats(DetailedUserFieldsStats $stats) : self
    {
        $this->stats = $stats;
        return $this;
    }
}