<?php

namespace Jane\Component\OpenApi3\Tests\Issue680\Model;

class TestBody extends \ArrayObject
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
     * @var list<string>|null
     */
    protected $items;
    /**
     * @return list<string>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * @param list<string>|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}