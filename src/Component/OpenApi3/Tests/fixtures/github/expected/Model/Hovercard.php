<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class Hovercard implements AdditionalPropertiesInterface
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
     * @var list<HovercardContextsItem>
     */
    protected $contexts;
    /**
     * @return list<HovercardContextsItem>
     */
    public function getContexts(): array
    {
        return $this->contexts;
    }
    /**
     * @param list<HovercardContextsItem> $contexts
     *
     * @return self
     */
    public function setContexts(array $contexts): self
    {
        $this->initialized['contexts'] = true;
        $this->contexts = $contexts;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['contexts' => ['contexts', 'getContexts', 'setContexts']];
    }
}