<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class BranchProtectionRequiredLinearHistory implements AdditionalPropertiesInterface
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
    protected $enabled;
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
    public function definedProperties(): array
    {
        return ['enabled' => ['enabled', 'getEnabled', 'setEnabled']];
    }
}