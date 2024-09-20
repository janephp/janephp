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
     * @var null
     */
    protected $onlyNull;
    /**
     * @var string|null
     */
    protected $nullOrString;
    /**
     * @var list<string>|null
     */
    protected $array;
    /**
     * @var array<string, string>|null
     */
    protected $object;
    /**
     * @return null
     */
    public function getOnlyNull()
    {
        return $this->onlyNull;
    }
    /**
     * @param null $onlyNull
     *
     * @return self
     */
    public function setOnlyNull($onlyNull): self
    {
        $this->initialized['onlyNull'] = true;
        $this->onlyNull = $onlyNull;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getNullOrString(): ?string
    {
        return $this->nullOrString;
    }
    /**
     * @param string|null $nullOrString
     *
     * @return self
     */
    public function setNullOrString(?string $nullOrString): self
    {
        $this->initialized['nullOrString'] = true;
        $this->nullOrString = $nullOrString;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getArray(): ?array
    {
        return $this->array;
    }
    /**
     * @param list<string>|null $array
     *
     * @return self
     */
    public function setArray(?array $array): self
    {
        $this->initialized['array'] = true;
        $this->array = $array;
        return $this;
    }
    /**
     * @return array<string, string>|null
     */
    public function getObject(): ?iterable
    {
        return $this->object;
    }
    /**
     * @param array<string, string>|null $object
     *
     * @return self
     */
    public function setObject(?iterable $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }
}