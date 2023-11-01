<?php

namespace Docker\Api\Model;

class NetworksPrunePostResponse200
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
     * Networks that were deleted
     *
     * @var string[]
     */
    protected $networksDeleted;
    /**
     * Networks that were deleted
     *
     * @return string[]
     */
    public function getNetworksDeleted() : array
    {
        return $this->networksDeleted;
    }
    /**
     * Networks that were deleted
     *
     * @param string[] $networksDeleted
     *
     * @return self
     */
    public function setNetworksDeleted(array $networksDeleted) : self
    {
        $this->initialized['networksDeleted'] = true;
        $this->networksDeleted = $networksDeleted;
        return $this;
    }
}