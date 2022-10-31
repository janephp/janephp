<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MentionFields extends \ArrayObject
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
     * The Twitter handle (screen name) of this user.
     *
     * @var string
     */
    protected $username;
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
        $this->initialized['username'] = true;
        $this->username = $username;
        return $this;
    }
}