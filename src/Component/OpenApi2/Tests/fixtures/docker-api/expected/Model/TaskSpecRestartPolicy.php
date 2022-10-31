<?php

namespace Docker\Api\Model;

class TaskSpecRestartPolicy
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
     * Condition for restart.
     *
     * @var string
     */
    protected $condition;
    /**
     * Delay between restart attempts.
     *
     * @var int
     */
    protected $delay;
    /**
    * Maximum attempts to restart a given container before giving up
    (default value is 0, which is ignored).
    
    *
    * @var int
    */
    protected $maxAttempts = 0;
    /**
    * Windows is the time window used to evaluate the restart policy
    (default value is 0, which is unbounded).
    
    *
    * @var int
    */
    protected $window = 0;
    /**
     * Condition for restart.
     *
     * @return string
     */
    public function getCondition() : string
    {
        return $this->condition;
    }
    /**
     * Condition for restart.
     *
     * @param string $condition
     *
     * @return self
     */
    public function setCondition(string $condition) : self
    {
        $this->initialized['condition'] = true;
        $this->condition = $condition;
        return $this;
    }
    /**
     * Delay between restart attempts.
     *
     * @return int
     */
    public function getDelay() : int
    {
        return $this->delay;
    }
    /**
     * Delay between restart attempts.
     *
     * @param int $delay
     *
     * @return self
     */
    public function setDelay(int $delay) : self
    {
        $this->initialized['delay'] = true;
        $this->delay = $delay;
        return $this;
    }
    /**
    * Maximum attempts to restart a given container before giving up
    (default value is 0, which is ignored).
    
    *
    * @return int
    */
    public function getMaxAttempts() : int
    {
        return $this->maxAttempts;
    }
    /**
    * Maximum attempts to restart a given container before giving up
    (default value is 0, which is ignored).
    
    *
    * @param int $maxAttempts
    *
    * @return self
    */
    public function setMaxAttempts(int $maxAttempts) : self
    {
        $this->initialized['maxAttempts'] = true;
        $this->maxAttempts = $maxAttempts;
        return $this;
    }
    /**
    * Windows is the time window used to evaluate the restart policy
    (default value is 0, which is unbounded).
    
    *
    * @return int
    */
    public function getWindow() : int
    {
        return $this->window;
    }
    /**
    * Windows is the time window used to evaluate the restart policy
    (default value is 0, which is unbounded).
    
    *
    * @param int $window
    *
    * @return self
    */
    public function setWindow(int $window) : self
    {
        $this->initialized['window'] = true;
        $this->window = $window;
        return $this;
    }
}