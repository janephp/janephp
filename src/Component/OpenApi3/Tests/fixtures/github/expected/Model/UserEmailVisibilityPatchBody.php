<?php

namespace Github\Model;

class UserEmailVisibilityPatchBody extends \ArrayObject
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
     * An email address associated with the GitHub user account to manage.
     *
     * @var string
     */
    protected $email;
    /**
     * Denotes whether an email is publically visible.
     *
     * @var string
     */
    protected $visibility;
    /**
     * An email address associated with the GitHub user account to manage.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * An email address associated with the GitHub user account to manage.
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
     * Denotes whether an email is publically visible.
     *
     * @return string
     */
    public function getVisibility() : string
    {
        return $this->visibility;
    }
    /**
     * Denotes whether an email is publically visible.
     *
     * @param string $visibility
     *
     * @return self
     */
    public function setVisibility(string $visibility) : self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;
        return $this;
    }
}