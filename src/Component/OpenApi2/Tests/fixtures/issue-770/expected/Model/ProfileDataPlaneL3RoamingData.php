<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileDataPlaneL3RoamingData
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
     * Data plane key
     *
     * @var string
     */
    protected $key;
    /**
     * Show if this DP is included in the L3 roaming feature or not, 0 means excluded and 1 means included
     *
     * @var int
     */
    protected $activated;
    /**
     * A list of L3 roaming configuration for this DP
     *
     * @var string
     */
    protected $value;
    /**
     * DP name
     *
     * @var string
     */
    protected $name;
    /**
     * DP firmware version
     *
     * @var string
     */
    protected $firmwareVersion;
    /**
     * @var string
     */
    protected $subCriteriaType;
    /**
     * Data plane key
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * Data plane key
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * Show if this DP is included in the L3 roaming feature or not, 0 means excluded and 1 means included
     *
     * @return int
     */
    public function getActivated(): int
    {
        return $this->activated;
    }
    /**
     * Show if this DP is included in the L3 roaming feature or not, 0 means excluded and 1 means included
     *
     * @param int $activated
     *
     * @return self
     */
    public function setActivated(int $activated): self
    {
        $this->initialized['activated'] = true;
        $this->activated = $activated;
        return $this;
    }
    /**
     * A list of L3 roaming configuration for this DP
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * A list of L3 roaming configuration for this DP
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * DP name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * DP name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * DP firmware version
     *
     * @return string
     */
    public function getFirmwareVersion(): string
    {
        return $this->firmwareVersion;
    }
    /**
     * DP firmware version
     *
     * @param string $firmwareVersion
     *
     * @return self
     */
    public function setFirmwareVersion(string $firmwareVersion): self
    {
        $this->initialized['firmwareVersion'] = true;
        $this->firmwareVersion = $firmwareVersion;
        return $this;
    }
    /**
     * @return string
     */
    public function getSubCriteriaType(): string
    {
        return $this->subCriteriaType;
    }
    /**
     * @param string $subCriteriaType
     *
     * @return self
     */
    public function setSubCriteriaType(string $subCriteriaType): self
    {
        $this->initialized['subCriteriaType'] = true;
        $this->subCriteriaType = $subCriteriaType;
        return $this;
    }
}