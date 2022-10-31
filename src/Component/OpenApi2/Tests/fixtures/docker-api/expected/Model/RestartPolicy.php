<?php

namespace Docker\Api\Model;

class RestartPolicy
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
    * - Empty string means not to restart
    - `no` Do not automatically restart
    - `always` Always restart
    - `unless-stopped` Restart always except when the user has manually stopped the container
    - `on-failure` Restart only when the container exit code is non-zero
    
    *
    * @var string
    */
    protected $name;
    /**
     * If `on-failure` is used, the number of times to retry before giving up.
     *
     * @var int
     */
    protected $maximumRetryCount;
    /**
    * - Empty string means not to restart
    - `no` Do not automatically restart
    - `always` Always restart
    - `unless-stopped` Restart always except when the user has manually stopped the container
    - `on-failure` Restart only when the container exit code is non-zero
    
    *
    * @return string
    */
    public function getName() : string
    {
        return $this->name;
    }
    /**
    * - Empty string means not to restart
    - `no` Do not automatically restart
    - `always` Always restart
    - `unless-stopped` Restart always except when the user has manually stopped the container
    - `on-failure` Restart only when the container exit code is non-zero
    
    *
    * @param string $name
    *
    * @return self
    */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * If `on-failure` is used, the number of times to retry before giving up.
     *
     * @return int
     */
    public function getMaximumRetryCount() : int
    {
        return $this->maximumRetryCount;
    }
    /**
     * If `on-failure` is used, the number of times to retry before giving up.
     *
     * @param int $maximumRetryCount
     *
     * @return self
     */
    public function setMaximumRetryCount(int $maximumRetryCount) : self
    {
        $this->initialized['maximumRetryCount'] = true;
        $this->maximumRetryCount = $maximumRetryCount;
        return $this;
    }
}