<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApmodelLacpSetting
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
     * @var bool
     */
    protected $keepApSetting;
    /**
     * @var bool
     */
    protected $enabled;
    /**
     * @var string
     */
    protected $bondPortProfileId;
    /**
     * @return bool
     */
    public function getKeepApSetting(): bool
    {
        return $this->keepApSetting;
    }
    /**
     * @param bool $keepApSetting
     *
     * @return self
     */
    public function setKeepApSetting(bool $keepApSetting): self
    {
        $this->initialized['keepApSetting'] = true;
        $this->keepApSetting = $keepApSetting;
        return $this;
    }
    /**
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getBondPortProfileId(): string
    {
        return $this->bondPortProfileId;
    }
    /**
     * @param string $bondPortProfileId
     *
     * @return self
     */
    public function setBondPortProfileId(string $bondPortProfileId): self
    {
        $this->initialized['bondPortProfileId'] = true;
        $this->bondPortProfileId = $bondPortProfileId;
        return $this;
    }
}