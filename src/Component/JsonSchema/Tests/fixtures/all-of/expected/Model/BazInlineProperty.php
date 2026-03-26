<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class BazInlineProperty
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
    protected $inline;
    /**
     * @return string
     */
    public function getInline(): string
    {
        return $this->inline;
    }
    /**
     * @param string $inline
     *
     * @return self
     */
    public function setInline(string $inline): self
    {
        $this->initialized['inline'] = true;
        $this->inline = $inline;
        return $this;
    }
}