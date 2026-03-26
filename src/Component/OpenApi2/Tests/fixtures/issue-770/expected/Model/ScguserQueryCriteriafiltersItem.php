<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ScguserQueryCriteriaFiltersItem
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
     * DOMAIN ID
     *
     * @var string
     */
    protected $value;
    /**
     * operator
     *
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
     * DOMAIN ID
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * DOMAIN ID
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
     * operator
     *
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }
    /**
     * operator
     *
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