<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class PatternProperties extends \ArrayObject
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
     * @var int|null
     */
    protected $bar;
    /**
     * @return int|null
     */
    public function getBar(): ?int
    {
        return $this->bar;
    }
    /**
     * @param int|null $bar
     *
     * @return self
     */
    public function setBar(?int $bar): self
    {
        $this->initialized['bar'] = true;
        $this->bar = $bar;
        return $this;
    }
}