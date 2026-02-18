<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class BarItem
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
     * @var string
     */
    protected $bar;
    /**
     * @return string
     */
    public function getBar(): string
    {
        return $this->bar;
    }
    /**
     * @param string $bar
     *
     * @return self
     */
    public function setBar(string $bar): self
    {
        $this->initialized['bar'] = true;
        $this->bar = $bar;
        return $this;
    }
}