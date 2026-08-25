<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsCreateDeploymentRequest implements AdditionalPropertiesInterface
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
     * @var bool
     */
    protected $forceBuild;
    /**
     * @return bool
     */
    public function getForceBuild(): bool
    {
        return $this->forceBuild;
    }
    /**
     * @param bool $forceBuild
     *
     * @return self
     */
    public function setForceBuild(bool $forceBuild): self
    {
        $this->initialized['forceBuild'] = true;
        $this->forceBuild = $forceBuild;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['forceBuild' => ['force_build', 'getForceBuild', 'setForceBuild']];
    }
}