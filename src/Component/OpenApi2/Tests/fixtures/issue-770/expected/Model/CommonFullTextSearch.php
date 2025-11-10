<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonFullTextSearch
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Search logic operator
     *
     * @var string
     */
    protected $type;
    /**
     * Text or number to search
     *
     * @var string
     */
    protected $value;
    /**
     * Specific fields to search
     *
     * @var list<string>
     */
    protected $fields;
    /**
     * Search logic operator
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Search logic operator
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
     * Text or number to search
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Text or number to search
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
    /**
     * Specific fields to search
     *
     * @return list<string>
     */
    public function getFields(): array
    {
        return $this->fields;
    }
    /**
     * Specific fields to search
     *
     * @param list<string> $fields
     *
     * @return self
     */
    public function setFields(array $fields): self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
        return $this;
    }
}