<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ScimUserGroupsItem implements AdditionalPropertiesInterface
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
    protected $value;
    /**
     * @var string
     */
    protected $display;
    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * @return string
     */
    public function getDisplay(): string
    {
        return $this->display;
    }
    /**
     * @param string $display
     *
     * @return self
     */
    public function setDisplay(string $display): self
    {
        $this->initialized['display'] = true;
        $this->display = $display;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['value' => ['value', 'getValue', 'setValue'], 'display' => ['display', 'getDisplay', 'setDisplay']];
    }
}