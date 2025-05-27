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
     * @var null|Id
     */
    protected $id;
    /**
     * @return null|Id
     */
    public function getId(): ?Id
    {
        return $this->id;
    }
    /**
     * @param null|Id $id
     *
     * @return self
     */
    public function setId(?Id $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}