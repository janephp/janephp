<?php

namespace Github\Model;

class ReposOwnerRepoActionsSecretsGetResponse200 extends \ArrayObject
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
     * @var list<ActionsSecret>
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
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return list<ActionsSecret>
     */
    public function getSecrets() : array
    {
        return $this->secrets;
    }
    /**
     * 
     *
     * @param list<ActionsSecret> $secrets
     *
     * @return self
     */
    public function setSecrets(array $secrets) : self
    {
        $this->initialized['secrets'] = true;
        $this->secrets = $secrets;
        return $this;
    }
}