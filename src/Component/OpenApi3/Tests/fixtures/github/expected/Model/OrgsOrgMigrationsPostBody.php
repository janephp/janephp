<?php

namespace Github\Model;

class OrgsOrgMigrationsPostBody extends \ArrayObject
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
     * A list of arrays indicating which repositories should be migrated.
     *
     * @var string[]
     */
    protected $repositories;
    /**
     * Indicates whether repositories should be locked (to prevent manipulation) while migrating data.
     *
     * @var bool
     */
    protected $lockRepositories = false;
    /**
     * Indicates whether attachments should be excluded from the migration (to reduce migration archive file size).
     *
     * @var bool
     */
    protected $excludeAttachments = false;
    /**
     * 
     *
     * @var string[]
     */
    protected $exclude;
    /**
     * A list of arrays indicating which repositories should be migrated.
     *
     * @return string[]
     */
    public function getRepositories() : array
    {
        return $this->repositories;
    }
    /**
     * A list of arrays indicating which repositories should be migrated.
     *
     * @param string[] $repositories
     *
     * @return self
     */
    public function setRepositories(array $repositories) : self
    {
        $this->initialized['repositories'] = true;
        $this->repositories = $repositories;
        return $this;
    }
    /**
     * Indicates whether repositories should be locked (to prevent manipulation) while migrating data.
     *
     * @return bool
     */
    public function getLockRepositories() : bool
    {
        return $this->lockRepositories;
    }
    /**
     * Indicates whether repositories should be locked (to prevent manipulation) while migrating data.
     *
     * @param bool $lockRepositories
     *
     * @return self
     */
    public function setLockRepositories(bool $lockRepositories) : self
    {
        $this->initialized['lockRepositories'] = true;
        $this->lockRepositories = $lockRepositories;
        return $this;
    }
    /**
     * Indicates whether attachments should be excluded from the migration (to reduce migration archive file size).
     *
     * @return bool
     */
    public function getExcludeAttachments() : bool
    {
        return $this->excludeAttachments;
    }
    /**
     * Indicates whether attachments should be excluded from the migration (to reduce migration archive file size).
     *
     * @param bool $excludeAttachments
     *
     * @return self
     */
    public function setExcludeAttachments(bool $excludeAttachments) : self
    {
        $this->initialized['excludeAttachments'] = true;
        $this->excludeAttachments = $excludeAttachments;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getExclude() : array
    {
        return $this->exclude;
    }
    /**
     * 
     *
     * @param string[] $exclude
     *
     * @return self
     */
    public function setExclude(array $exclude) : self
    {
        $this->initialized['exclude'] = true;
        $this->exclude = $exclude;
        return $this;
    }
}