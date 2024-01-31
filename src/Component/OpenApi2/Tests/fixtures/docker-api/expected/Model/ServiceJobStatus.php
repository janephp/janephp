<?php

namespace Docker\Api\Model;

class ServiceJobStatus
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
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @var ObjectVersion
    */
    protected $jobIteration;
    /**
    * The last time, as observed by the server, that this job was
    started.
    
    *
    * @var string
    */
    protected $lastExecution;
    /**
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @return ObjectVersion
    */
    public function getJobIteration() : ObjectVersion
    {
        return $this->jobIteration;
    }
    /**
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @param ObjectVersion $jobIteration
    *
    * @return self
    */
    public function setJobIteration(ObjectVersion $jobIteration) : self
    {
        $this->initialized['jobIteration'] = true;
        $this->jobIteration = $jobIteration;
        return $this;
    }
    /**
    * The last time, as observed by the server, that this job was
    started.
    
    *
    * @return string
    */
    public function getLastExecution() : string
    {
        return $this->lastExecution;
    }
    /**
    * The last time, as observed by the server, that this job was
    started.
    
    *
    * @param string $lastExecution
    *
    * @return self
    */
    public function setLastExecution(string $lastExecution) : self
    {
        $this->initialized['lastExecution'] = true;
        $this->lastExecution = $lastExecution;
        return $this;
    }
}