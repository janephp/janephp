<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class Topic implements AdditionalPropertiesInterface
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
     * @var list<string>
     */
    protected $names;
    /**
     * @return list<string>
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * @param list<string> $names
     *
     * @return self
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['names' => ['names', 'getNames', 'setNames']];
    }
}