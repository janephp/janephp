<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Test
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
     * @var TestId|null
     */
    protected $id;
    /**
     * @return TestId|null
     */
    public function getId(): ?TestId
    {
        return $this->id;
    }
    /**
     * @param TestId|null $id
     *
     * @return self
     */
    public function setId(?TestId $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}