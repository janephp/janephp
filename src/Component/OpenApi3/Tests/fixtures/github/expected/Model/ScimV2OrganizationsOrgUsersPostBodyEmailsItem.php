<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ScimV2OrganizationsOrgUsersPostBodyEmailsItem implements AdditionalPropertiesInterface
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
     * @var bool
     */
    protected $primary;
    /**
     * @var string
     */
    protected $type;
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
     * @return bool
     */
    public function getPrimary(): bool
    {
        return $this->primary;
    }
    /**
     * @param bool $primary
     *
     * @return self
     */
    public function setPrimary(bool $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['value' => ['value', 'getValue', 'setValue'], 'primary' => ['primary', 'getPrimary', 'setPrimary'], 'type' => ['type', 'getType', 'setType']];
    }
}