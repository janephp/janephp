<?php

namespace Docker\Api\Model;

class NetworksPrunePostResponse200
{
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
        $this->networksDeleted = $networksDeleted;
        return $this;
    }
}