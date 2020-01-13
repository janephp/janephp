<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class CompactUser
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
}