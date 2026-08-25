<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiRollbackToAgentVersionInputPublic implements AdditionalPropertiesInterface
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
     * Agent unique identifier
     *
     * @var string
     */
    protected $uuid;
    /**
     * Unique identifier
     *
     * @var string
     */
    protected $versionHash;
    /**
     * Agent unique identifier
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Agent unique identifier
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
    /**
     * Unique identifier
     *
     * @return string
     */
    public function getVersionHash(): string
    {
        return $this->versionHash;
    }
    /**
     * Unique identifier
     *
     * @param string $versionHash
     *
     * @return self
     */
    public function setVersionHash(string $versionHash): self
    {
        $this->initialized['versionHash'] = true;
        $this->versionHash = $versionHash;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['uuid' => ['uuid', 'getUuid', 'setUuid'], 'versionHash' => ['version_hash', 'getVersionHash', 'setVersionHash']];
    }
}