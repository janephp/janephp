<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemModifyDataPlaneState
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Mark this Data Plane as a CALEA Relay
     *
     * @var bool
     */
    protected $isDataCenter;
    /**
     * Mark this Data Plane as a CALEA Relay
     *
     * @return bool
     */
    public function getIsDataCenter(): bool
    {
        return $this->isDataCenter;
    }
    /**
     * Mark this Data Plane as a CALEA Relay
     *
     * @param bool $isDataCenter
     *
     * @return self
     */
    public function setIsDataCenter(bool $isDataCenter): self
    {
        $this->initialized['isDataCenter'] = true;
        $this->isDataCenter = $isDataCenter;
        return $this;
    }
}