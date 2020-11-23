<?php

namespace Github\Model;

class ReposOwnerRepoActionsSecretsGetResponse200
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
     * @var ActionsSecret[]
     */
    protected $secrets;
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
     * @return ActionsSecret[]
     */
    public function getSecrets() : array
    {
        return $this->secrets;
    }
    /**
     * 
     *
     * @param ActionsSecret[] $secrets
     *
     * @return self
     */
    public function setSecrets(array $secrets) : self
    {
        $this->secrets = $secrets;
        return $this;
    }
}