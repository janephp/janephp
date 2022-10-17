<?php

namespace Github\Model;

class Stargazer extends \ArrayObject
{
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
        $this->user = $user;
        return $this;
    }
}