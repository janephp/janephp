<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class FlexiVpnFlexiVpnSetting
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
     * DP Group ID
     *
     * @var string
     */
    protected $dpGroupId;
    /**
     * DP Group ID
     *
     * @return string
     */
    public function getDpGroupId(): string
    {
        return $this->dpGroupId;
    }
    /**
     * DP Group ID
     *
     * @param string $dpGroupId
     *
     * @return self
     */
    public function setDpGroupId(string $dpGroupId): self
    {
        $this->initialized['dpGroupId'] = true;
        $this->dpGroupId = $dpGroupId;
        return $this;
    }
}