<?php

namespace Github\Model;

class StarredRepository
{
    /**
     * 
     *
     * @var \DateTime
     */
    protected $starredAt;
    /**
     * A git repository
     *
     * @var Repository
     */
    protected $repo;
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
     * A git repository
     *
     * @return Repository
     */
    public function getRepo() : Repository
    {
        return $this->repo;
    }
    /**
     * A git repository
     *
     * @param Repository $repo
     *
     * @return self
     */
    public function setRepo(Repository $repo) : self
    {
        $this->repo = $repo;
        return $this;
    }
}