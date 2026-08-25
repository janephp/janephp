<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiModelVersion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Major version number
     *
     * @var int
     */
    protected $major;
    /**
     * Minor version number
     *
     * @var int
     */
    protected $minor;
    /**
     * Patch version number
     *
     * @var int
     */
    protected $patch;
    /**
     * Major version number
     *
     * @return int
     */
    public function getMajor(): int
    {
        return $this->major;
    }
    /**
     * Major version number
     *
     * @param int $major
     *
     * @return self
     */
    public function setMajor(int $major): self
    {
        $this->initialized['major'] = true;
        $this->major = $major;
        return $this;
    }
    /**
     * Minor version number
     *
     * @return int
     */
    public function getMinor(): int
    {
        return $this->minor;
    }
    /**
     * Minor version number
     *
     * @param int $minor
     *
     * @return self
     */
    public function setMinor(int $minor): self
    {
        $this->initialized['minor'] = true;
        $this->minor = $minor;
        return $this;
    }
    /**
     * Patch version number
     *
     * @return int
     */
    public function getPatch(): int
    {
        return $this->patch;
    }
    /**
     * Patch version number
     *
     * @param int $patch
     *
     * @return self
     */
    public function setPatch(int $patch): self
    {
        $this->initialized['patch'] = true;
        $this->patch = $patch;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['major' => ['major', 'getMajor', 'setMajor'], 'minor' => ['minor', 'getMinor', 'setMinor'], 'patch' => ['patch', 'getPatch', 'setPatch']];
    }
}