<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonQueryCriteriaFiltersItem
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
     * Group type
     *
     * @var string
     */
    protected $type;
    /**
     * Group ID
     *
     * @var string
     */
    protected $value;
    /**
     * @var string
     */
    protected $operator;
    /**
     * Group type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Group type
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
     * Group ID
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Group ID
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
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }
    /**
     * @param string $operator
     *
     * @return self
     */
    public function setOperator(string $operator): self
    {
        $this->initialized['operator'] = true;
        $this->operator = $operator;
        return $this;
    }
}