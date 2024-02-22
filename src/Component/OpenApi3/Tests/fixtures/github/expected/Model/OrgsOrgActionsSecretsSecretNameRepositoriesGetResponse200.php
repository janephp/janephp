<?php

namespace Github\Model;

class OrgsOrgActionsSecretsSecretNameRepositoriesGetResponse200 extends \ArrayObject
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
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @var list<MinimalRepository>
     */
    protected $repositories;
    /**
     * 
     *
     * @return int
     */
    public function getTotalCount() : int
    {
        return $this->totalCount;
    }
    /**
     * 
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount) : self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return list<MinimalRepository>
     */
    public function getRepositories() : array
    {
        return $this->repositories;
    }
    /**
     * 
     *
     * @param list<MinimalRepository> $repositories
     *
     * @return self
     */
    public function setRepositories(array $repositories) : self
    {
        $this->initialized['repositories'] = true;
        $this->repositories = $repositories;
        return $this;
    }
}