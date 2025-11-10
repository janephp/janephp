<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MeshNodeInfoHelperZoneInfo
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
     * @var string
     */
    protected $helperAPZoneId;
    /**
     * @var string
     */
    protected $helperAPZoneName;
    /**
     * @return string
     */
    public function getHelperAPZoneId(): string
    {
        return $this->helperAPZoneId;
    }
    /**
     * @param string $helperAPZoneId
     *
     * @return self
     */
    public function setHelperAPZoneId(string $helperAPZoneId): self
    {
        $this->initialized['helperAPZoneId'] = true;
        $this->helperAPZoneId = $helperAPZoneId;
        return $this;
    }
    /**
     * @return string
     */
    public function getHelperAPZoneName(): string
    {
        return $this->helperAPZoneName;
    }
    /**
     * @param string $helperAPZoneName
     *
     * @return self
     */
    public function setHelperAPZoneName(string $helperAPZoneName): self
    {
        $this->initialized['helperAPZoneName'] = true;
        $this->helperAPZoneName = $helperAPZoneName;
        return $this;
    }
}