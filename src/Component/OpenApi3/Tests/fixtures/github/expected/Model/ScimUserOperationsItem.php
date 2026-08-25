<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ScimUserOperationsItem implements AdditionalPropertiesInterface
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
    protected $op;
    /**
     * @var string
     */
    protected $path;
    /**
     * @var string|array<string, mixed>|list<mixed>
     */
    protected $value;
    /**
     * @return string
     */
    public function getOp(): string
    {
        return $this->op;
    }
    /**
     * @param string $op
     *
     * @return self
     */
    public function setOp(string $op): self
    {
        $this->initialized['op'] = true;
        $this->op = $op;
        return $this;
    }
    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
    /**
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * @return string|array<string, mixed>|list<mixed>
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * @param string|array<string, mixed>|list<mixed> $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['op' => ['op', 'getOp', 'setOp'], 'path' => ['path', 'getPath', 'setPath'], 'value' => ['value', 'getValue', 'setValue']];
    }
}