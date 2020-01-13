<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class MentionFields
{
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
        $this->username = $username;
        return $this;
    }
}