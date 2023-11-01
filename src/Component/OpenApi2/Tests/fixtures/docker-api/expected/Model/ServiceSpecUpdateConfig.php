<?php

namespace Docker\Api\Model;

class ServiceSpecUpdateConfig
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
    * Maximum number of tasks to be updated in one iteration (0 means
    unlimited parallelism).
    
    *
    * @var int
    */
    protected $parallelism;
    /**
     * Amount of time between updates, in nanoseconds.
     *
     * @var int
     */
    protected $delay;
    /**
    * Action to take if an updated task fails to run, or stops running
    during the update.
    
    *
    * @var string
    */
    protected $failureAction;
    /**
    * Amount of time to monitor each updated task for failures, in
    nanoseconds.
    
    *
    * @var int
    */
    protected $monitor;
    /**
    * The fraction of tasks that may fail during an update before the
    failure action is invoked, specified as a floating point number
    between 0 and 1.
    
    *
    * @var float
    */
    protected $maxFailureRatio = 0;
    /**
    * The order of operations when rolling out an updated task. Either
    the old task is shut down before the new task is started, or the
    new task is started before the old task is shut down.
    
    *
    * @var string
    */
    protected $order;
    /**
    * Maximum number of tasks to be updated in one iteration (0 means
    unlimited parallelism).
    
    *
    * @return int
    */
    public function getParallelism() : int
    {
        return $this->parallelism;
    }
    /**
    * Maximum number of tasks to be updated in one iteration (0 means
    unlimited parallelism).
    
    *
    * @param int $parallelism
    *
    * @return self
    */
    public function setParallelism(int $parallelism) : self
    {
        $this->initialized['parallelism'] = true;
        $this->parallelism = $parallelism;
        return $this;
    }
    /**
     * Amount of time between updates, in nanoseconds.
     *
     * @return int
     */
    public function getDelay() : int
    {
        return $this->delay;
    }
    /**
     * Amount of time between updates, in nanoseconds.
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
    * Action to take if an updated task fails to run, or stops running
    during the update.
    
    *
    * @return string
    */
    public function getFailureAction() : string
    {
        return $this->failureAction;
    }
    /**
    * Action to take if an updated task fails to run, or stops running
    during the update.
    
    *
    * @param string $failureAction
    *
    * @return self
    */
    public function setFailureAction(string $failureAction) : self
    {
        $this->initialized['failureAction'] = true;
        $this->failureAction = $failureAction;
        return $this;
    }
    /**
    * Amount of time to monitor each updated task for failures, in
    nanoseconds.
    
    *
    * @return int
    */
    public function getMonitor() : int
    {
        return $this->monitor;
    }
    /**
    * Amount of time to monitor each updated task for failures, in
    nanoseconds.
    
    *
    * @param int $monitor
    *
    * @return self
    */
    public function setMonitor(int $monitor) : self
    {
        $this->initialized['monitor'] = true;
        $this->monitor = $monitor;
        return $this;
    }
    /**
    * The fraction of tasks that may fail during an update before the
    failure action is invoked, specified as a floating point number
    between 0 and 1.
    
    *
    * @return float
    */
    public function getMaxFailureRatio() : float
    {
        return $this->maxFailureRatio;
    }
    /**
    * The fraction of tasks that may fail during an update before the
    failure action is invoked, specified as a floating point number
    between 0 and 1.
    
    *
    * @param float $maxFailureRatio
    *
    * @return self
    */
    public function setMaxFailureRatio(float $maxFailureRatio) : self
    {
        $this->initialized['maxFailureRatio'] = true;
        $this->maxFailureRatio = $maxFailureRatio;
        return $this;
    }
    /**
    * The order of operations when rolling out an updated task. Either
    the old task is shut down before the new task is started, or the
    new task is started before the old task is shut down.
    
    *
    * @return string
    */
    public function getOrder() : string
    {
        return $this->order;
    }
    /**
    * The order of operations when rolling out an updated task. Either
    the old task is shut down before the new task is started, or the
    new task is started before the old task is shut down.
    
    *
    * @param string $order
    *
    * @return self
    */
    public function setOrder(string $order) : self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
}