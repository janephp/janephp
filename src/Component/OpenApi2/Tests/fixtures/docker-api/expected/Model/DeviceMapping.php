<?php

namespace Docker\Api\Model;

class DeviceMapping
{
    /**
     * 
     *
     * @var string
     */
    protected $pathOnHost;
    /**
     * 
     *
     * @var string
     */
    protected $pathInContainer;
    /**
     * 
     *
     * @var string
     */
    protected $cgroupPermissions;
    /**
     * 
     *
     * @return string
     */
    public function getPathOnHost() : string
    {
        return $this->pathOnHost;
    }
    /**
     * 
     *
     * @param string $pathOnHost
     *
     * @return self
     */
    public function setPathOnHost(string $pathOnHost) : self
    {
        $this->pathOnHost = $pathOnHost;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPathInContainer() : string
    {
        return $this->pathInContainer;
    }
    /**
     * 
     *
     * @param string $pathInContainer
     *
     * @return self
     */
    public function setPathInContainer(string $pathInContainer) : self
    {
        $this->pathInContainer = $pathInContainer;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCgroupPermissions() : string
    {
        return $this->cgroupPermissions;
    }
    /**
     * 
     *
     * @param string $cgroupPermissions
     *
     * @return self
     */
    public function setCgroupPermissions(string $cgroupPermissions) : self
    {
        $this->cgroupPermissions = $cgroupPermissions;
        return $this;
    }
}