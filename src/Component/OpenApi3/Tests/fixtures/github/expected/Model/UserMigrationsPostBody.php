<?php

namespace Github\Model;

class UserMigrationsPostBody extends \ArrayObject
{
    /**
     * Lock the repositories being migrated at the start of the migration
     *
     * @var bool
     */
    protected $lockRepositories;
    /**
     * Do not include attachments in the migration
     *
     * @var bool
     */
    protected $excludeAttachments;
    /**
     * Exclude attributes from the API response to improve performance
     *
     * @var string[]
     */
    protected $exclude;
    /**
     * 
     *
     * @var string[]
     */
    protected $repositories;
    /**
     * Lock the repositories being migrated at the start of the migration
     *
     * @return bool
     */
    public function getLockRepositories() : bool
    {
        return $this->lockRepositories;
    }
    /**
     * Lock the repositories being migrated at the start of the migration
     *
     * @param bool $lockRepositories
     *
     * @return self
     */
    public function setLockRepositories(bool $lockRepositories) : self
    {
        $this->lockRepositories = $lockRepositories;
        return $this;
    }
    /**
     * Do not include attachments in the migration
     *
     * @return bool
     */
    public function getExcludeAttachments() : bool
    {
        return $this->excludeAttachments;
    }
    /**
     * Do not include attachments in the migration
     *
     * @param bool $excludeAttachments
     *
     * @return self
     */
    public function setExcludeAttachments(bool $excludeAttachments) : self
    {
        $this->excludeAttachments = $excludeAttachments;
        return $this;
    }
    /**
     * Exclude attributes from the API response to improve performance
     *
     * @return string[]
     */
    public function getExclude() : array
    {
        return $this->exclude;
    }
    /**
     * Exclude attributes from the API response to improve performance
     *
     * @param string[] $exclude
     *
     * @return self
     */
    public function setExclude(array $exclude) : self
    {
        $this->exclude = $exclude;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getRepositories() : array
    {
        return $this->repositories;
    }
    /**
     * 
     *
     * @param string[] $repositories
     *
     * @return self
     */
    public function setRepositories(array $repositories) : self
    {
        $this->repositories = $repositories;
        return $this;
    }
}