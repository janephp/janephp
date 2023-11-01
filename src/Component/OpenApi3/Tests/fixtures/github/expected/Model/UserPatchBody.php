<?php

namespace Github\Model;

class UserPatchBody extends \ArrayObject
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
     * The new name of the user.
     *
     * @var string
     */
    protected $name;
    /**
     * The publicly visible email address of the user.
     *
     * @var string
     */
    protected $email;
    /**
     * The new blog URL of the user.
     *
     * @var string
     */
    protected $blog;
    /**
     * The new Twitter username of the user.
     *
     * @var string|null
     */
    protected $twitterUsername;
    /**
     * The new company of the user.
     *
     * @var string
     */
    protected $company;
    /**
     * The new location of the user.
     *
     * @var string
     */
    protected $location;
    /**
     * The new hiring availability of the user.
     *
     * @var bool
     */
    protected $hireable;
    /**
     * The new short biography of the user.
     *
     * @var string
     */
    protected $bio;
    /**
     * The new name of the user.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The new name of the user.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The publicly visible email address of the user.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The publicly visible email address of the user.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The new blog URL of the user.
     *
     * @return string
     */
    public function getBlog() : string
    {
        return $this->blog;
    }
    /**
     * The new blog URL of the user.
     *
     * @param string $blog
     *
     * @return self
     */
    public function setBlog(string $blog) : self
    {
        $this->initialized['blog'] = true;
        $this->blog = $blog;
        return $this;
    }
    /**
     * The new Twitter username of the user.
     *
     * @return string|null
     */
    public function getTwitterUsername() : ?string
    {
        return $this->twitterUsername;
    }
    /**
     * The new Twitter username of the user.
     *
     * @param string|null $twitterUsername
     *
     * @return self
     */
    public function setTwitterUsername(?string $twitterUsername) : self
    {
        $this->initialized['twitterUsername'] = true;
        $this->twitterUsername = $twitterUsername;
        return $this;
    }
    /**
     * The new company of the user.
     *
     * @return string
     */
    public function getCompany() : string
    {
        return $this->company;
    }
    /**
     * The new company of the user.
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany(string $company) : self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * The new location of the user.
     *
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * The new location of the user.
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location) : self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * The new hiring availability of the user.
     *
     * @return bool
     */
    public function getHireable() : bool
    {
        return $this->hireable;
    }
    /**
     * The new hiring availability of the user.
     *
     * @param bool $hireable
     *
     * @return self
     */
    public function setHireable(bool $hireable) : self
    {
        $this->initialized['hireable'] = true;
        $this->hireable = $hireable;
        return $this;
    }
    /**
     * The new short biography of the user.
     *
     * @return string
     */
    public function getBio() : string
    {
        return $this->bio;
    }
    /**
     * The new short biography of the user.
     *
     * @param string $bio
     *
     * @return self
     */
    public function setBio(string $bio) : self
    {
        $this->initialized['bio'] = true;
        $this->bio = $bio;
        return $this;
    }
}