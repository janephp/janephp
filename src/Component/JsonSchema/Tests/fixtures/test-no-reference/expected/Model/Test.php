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
     * @var string
     */
    protected $string;
    /**
     * @var TestSubObject
     */
    protected $subObject;
    /**
     * @return string
     */
    public function getString(): string
    {
        return $this->string;
    }
    /**
     * @param string $string
     *
     * @return self
     */
    public function setString(string $string): self
    {
        $this->initialized['string'] = true;
        $this->string = $string;
        return $this;
    }
    /**
     * @return TestSubObject
     */
    public function getSubObject(): TestSubObject
    {
        return $this->subObject;
    }
    /**
     * @param TestSubObject $subObject
     *
     * @return self
     */
    public function setSubObject(TestSubObject $subObject): self
    {
        $this->initialized['subObject'] = true;
        $this->subObject = $subObject;
        return $this;
    }
}