<?php

namespace Jane\Generated\DigitalOcean\Model;

class DatabaseVersionOptions extends \ArrayObject
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
     * An array of strings containing the names of available regions
     *
     * @var list<string>
     */
    protected $versions;
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
}