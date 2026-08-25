<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class UserMembershipsOrgsOrgPatchBody implements AdditionalPropertiesInterface
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
     * The state that the membership should be in. Only `"active"` will be accepted.
     *
     * @var string
     */
    protected $state;
    /**
     * The state that the membership should be in. Only `"active"` will be accepted.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * The state that the membership should be in. Only `"active"` will be accepted.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['state' => ['state', 'getState', 'setState']];
    }
}