<?php

namespace Github\Model;

class ReposOwnerRepoIssuesIssueNumberLockPutBody extends \ArrayObject
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
    * The reason for locking the issue or pull request conversation. Lock will fail if you don't use one of these reasons:  
    \* `off-topic`  
    \* `too heated`  
    \* `resolved`  
    \* `spam`
    *
    * @var string
    */
    protected $lockReason;
    /**
    * The reason for locking the issue or pull request conversation. Lock will fail if you don't use one of these reasons:  
    \* `off-topic`  
    \* `too heated`  
    \* `resolved`  
    \* `spam`
    *
    * @return string
    */
    public function getLockReason() : string
    {
        return $this->lockReason;
    }
    /**
    * The reason for locking the issue or pull request conversation. Lock will fail if you don't use one of these reasons:  
    \* `off-topic`  
    \* `too heated`  
    \* `resolved`  
    \* `spam`
    *
    * @param string $lockReason
    *
    * @return self
    */
    public function setLockReason(string $lockReason) : self
    {
        $this->initialized['lockReason'] = true;
        $this->lockReason = $lockReason;
        return $this;
    }
}