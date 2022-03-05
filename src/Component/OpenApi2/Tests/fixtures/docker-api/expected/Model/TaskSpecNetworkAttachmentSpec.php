<?php

namespace Docker\Api\Model;

class TaskSpecNetworkAttachmentSpec
{
    /**
     * ID of the container represented by this task
     *
     * @var string
     */
    protected $containerID;
    /**
     * ID of the container represented by this task
     *
     * @return string
     */
    public function getContainerID() : string
    {
        return $this->containerID;
    }
    /**
     * ID of the container represented by this task
     *
     * @param string $containerID
     *
     * @return self
     */
    public function setContainerID(string $containerID) : self
    {
        $this->containerID = $containerID;
        return $this;
    }
}