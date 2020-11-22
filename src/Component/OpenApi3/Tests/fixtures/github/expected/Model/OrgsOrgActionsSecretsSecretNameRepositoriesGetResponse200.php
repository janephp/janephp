<?php

namespace Github\Model;

class OrgsOrgActionsSecretsSecretNameRepositoriesGetResponse200
{
    /**
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @var MinimalRepository[]
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
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return MinimalRepository[]
     */
    public function getRepositories() : array
    {
        return $this->repositories;
    }
    /**
     * 
     *
     * @param MinimalRepository[] $repositories
     *
     * @return self
     */
    public function setRepositories(array $repositories) : self
    {
        $this->repositories = $repositories;
        return $this;
    }
}