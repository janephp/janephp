<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OptionsOptionsMongodb implements AdditionalPropertiesInterface
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
     * An array of strings containing the names of available regions
     *
     * @var list<string>
     */
    protected $regions;
    /**
     * An array of strings containing the names of available regions
     *
     * @var list<string>
     */
    protected $versions;
    /**
     * An array of objects, each indicating the node sizes (otherwise referred to as slugs) that are available with various numbers of nodes in the database cluster. Each slugs denotes the node's identifier, CPU, and RAM (in that order).
     *
     * @var list<DatabaseLayoutOption>
     */
    protected $layouts;
    /**
     * An array of strings containing the names of available regions
     *
     * @return list<string>
     */
    public function getRegions(): array
    {
        return $this->regions;
    }
    /**
     * An array of strings containing the names of available regions
     *
     * @param list<string> $regions
     *
     * @return self
     */
    public function setRegions(array $regions): self
    {
        $this->initialized['regions'] = true;
        $this->regions = $regions;
        return $this;
    }
    /**
     * An array of strings containing the names of available regions
     *
     * @return list<string>
     */
    public function getVersions(): array
    {
        return $this->versions;
    }
    /**
     * An array of strings containing the names of available regions
     *
     * @param list<string> $versions
     *
     * @return self
     */
    public function setVersions(array $versions): self
    {
        $this->initialized['versions'] = true;
        $this->versions = $versions;
        return $this;
    }
    /**
     * An array of objects, each indicating the node sizes (otherwise referred to as slugs) that are available with various numbers of nodes in the database cluster. Each slugs denotes the node's identifier, CPU, and RAM (in that order).
     *
     * @return list<DatabaseLayoutOption>
     */
    public function getLayouts(): array
    {
        return $this->layouts;
    }
    /**
     * An array of objects, each indicating the node sizes (otherwise referred to as slugs) that are available with various numbers of nodes in the database cluster. Each slugs denotes the node's identifier, CPU, and RAM (in that order).
     *
     * @param list<DatabaseLayoutOption> $layouts
     *
     * @return self
     */
    public function setLayouts(array $layouts): self
    {
        $this->initialized['layouts'] = true;
        $this->layouts = $layouts;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['regions' => ['regions', 'getRegions', 'setRegions'], 'versions' => ['versions', 'getVersions', 'setVersions'], 'layouts' => ['layouts', 'getLayouts', 'setLayouts']];
    }
}