<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppVariableDefinition implements AdditionalPropertiesInterface
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
     * The variable name
     *
     * @var string
     */
    protected $key;
    /**
     * - RUN_TIME: Made available only at run-time
     * - BUILD_TIME: Made available only at build-time
     * - RUN_AND_BUILD_TIME: Made available at both build and run-time
     *
     * @var string
     */
    protected $scope = 'RUN_AND_BUILD_TIME';
    /**
     * - GENERAL: A plain-text environment variable
     * - SECRET: A secret encrypted environment variable
     *
     * @var string
     */
    protected $type = 'GENERAL';
    /**
     * The value. If the type is `SECRET`, the value will be encrypted on first submission. On following submissions, the encrypted value should be used.
     *
     * @var string
     */
    protected $value;
    /**
     * The variable name
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * The variable name
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * - RUN_TIME: Made available only at run-time
     * - BUILD_TIME: Made available only at build-time
     * - RUN_AND_BUILD_TIME: Made available at both build and run-time
     *
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope;
    }
    /**
    * - RUN_TIME: Made available only at run-time
    - BUILD_TIME: Made available only at build-time
    - RUN_AND_BUILD_TIME: Made available at both build and run-time
    *
    * @param string $scope
    *
    * @return self
    */
    public function setScope(string $scope): self
    {
        $this->initialized['scope'] = true;
        $this->scope = $scope;
        return $this;
    }
    /**
     * - GENERAL: A plain-text environment variable
     * - SECRET: A secret encrypted environment variable
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * - GENERAL: A plain-text environment variable
    - SECRET: A secret encrypted environment variable
    *
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
    /**
     * The value. If the type is `SECRET`, the value will be encrypted on first submission. On following submissions, the encrypted value should be used.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * The value. If the type is `SECRET`, the value will be encrypted on first submission. On following submissions, the encrypted value should be used.
     *
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
    public function definedProperties(): array
    {
        return ['key' => ['key', 'getKey', 'setKey'], 'scope' => ['scope', 'getScope', 'setScope'], 'type' => ['type', 'getType', 'setType'], 'value' => ['value', 'getValue', 'setValue']];
    }
}