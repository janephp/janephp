<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class MentionEntity
{
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @var int
     */
    protected $start;
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @var int
     */
    protected $end;
    /**
     * The Twitter handle (screen name) of this user.
     *
     * @var string
     */
    protected $username;
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @return int
     */
    public function getStart() : int
    {
        return $this->start;
    }
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @param int $start
     *
     * @return self
     */
    public function setStart(int $start) : self
    {
        $this->start = $start;
        return $this;
    }
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @return int
     */
    public function getEnd() : int
    {
        return $this->end;
    }
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @param int $end
     *
     * @return self
     */
    public function setEnd(int $end) : self
    {
        $this->end = $end;
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
}