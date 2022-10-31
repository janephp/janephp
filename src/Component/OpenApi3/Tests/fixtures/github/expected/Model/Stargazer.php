<?php

namespace Github\Model;

class Stargazer extends \ArrayObject
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
     * 
     *
     * @var \DateTime
     */
    protected $starredAt;
    /**
     * 
     *
     * @var StargazerUser|null
     */
    protected $user;
    /**
     * 
     *
     * @return \DateTime
     */
    public function getStarredAt() : \DateTime
    {
        return $this->starredAt;
    }
    /**
     * 
     *
     * @param \DateTime $starredAt
     *
     * @return self
     */
    public function setStarredAt(\DateTime $starredAt) : self
    {
        $this->initialized['starredAt'] = true;
        $this->starredAt = $starredAt;
        return $this;
    }
    /**
     * 
     *
     * @return StargazerUser|null
     */
    public function getUser() : ?StargazerUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param StargazerUser|null $user
     *
     * @return self
     */
    public function setUser(?StargazerUser $user) : self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}