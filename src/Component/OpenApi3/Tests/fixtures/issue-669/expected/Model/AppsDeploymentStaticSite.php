<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsDeploymentStaticSite implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $sourceCommitHash;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * @return string
     */
    public function getSourceCommitHash(): string
    {
        return $this->sourceCommitHash;
    }
    /**
     * @param string $sourceCommitHash
     *
     * @return self
     */
    public function setSourceCommitHash(string $sourceCommitHash): self
    {
        $this->initialized['sourceCommitHash'] = true;
        $this->sourceCommitHash = $sourceCommitHash;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'sourceCommitHash' => ['source_commit_hash', 'getSourceCommitHash', 'setSourceCommitHash']];
    }
}