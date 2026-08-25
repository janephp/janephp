<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseVersionAvailability implements AdditionalPropertiesInterface
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
     * A timestamp referring to the date when the particular version will no longer be supported. If null, the version does not have an end of life timeline.
     *
     * @var string|null
     */
    protected $endOfLife;
    /**
     * A timestamp referring to the date when the particular version will no longer be available for creating new clusters. If null, the version does not have an end of availability timeline.
     *
     * @var string|null
     */
    protected $endOfAvailability;
    /**
     * The engine version.
     *
     * @var string
     */
    protected $version;
    /**
     * A timestamp referring to the date when the particular version will no longer be supported. If null, the version does not have an end of life timeline.
     *
     * @return string|null
     */
    public function getEndOfLife(): ?string
    {
        return $this->endOfLife;
    }
    /**
     * A timestamp referring to the date when the particular version will no longer be supported. If null, the version does not have an end of life timeline.
     *
     * @param string|null $endOfLife
     *
     * @return self
     */
    public function setEndOfLife(?string $endOfLife): self
    {
        $this->initialized['endOfLife'] = true;
        $this->endOfLife = $endOfLife;
        return $this;
    }
    /**
     * A timestamp referring to the date when the particular version will no longer be available for creating new clusters. If null, the version does not have an end of availability timeline.
     *
     * @return string|null
     */
    public function getEndOfAvailability(): ?string
    {
        return $this->endOfAvailability;
    }
    /**
     * A timestamp referring to the date when the particular version will no longer be available for creating new clusters. If null, the version does not have an end of availability timeline.
     *
     * @param string|null $endOfAvailability
     *
     * @return self
     */
    public function setEndOfAvailability(?string $endOfAvailability): self
    {
        $this->initialized['endOfAvailability'] = true;
        $this->endOfAvailability = $endOfAvailability;
        return $this;
    }
    /**
     * The engine version.
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * The engine version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['endOfLife' => ['end_of_life', 'getEndOfLife', 'setEndOfLife'], 'endOfAvailability' => ['end_of_availability', 'getEndOfAvailability', 'setEndOfAvailability'], 'version' => ['version', 'getVersion', 'setVersion']];
    }
}