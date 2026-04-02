<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class ArrayItemsModel
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
     * @var list<string>
     */
    protected $uuidArray;
    /**
     * @var list<string>
     */
    protected $emailArray;
    /**
     * @var list<string>
     */
    protected $enumArray;
    /**
     * @var list<int>
     */
    protected $integerArray;
    /**
     * @var list<string>
     */
    protected $constrainedStringArray;
    /**
     * @return list<string>
     */
    public function getUuidArray(): array
    {
        return $this->uuidArray;
    }
    /**
     * @param list<string> $uuidArray
     *
     * @return self
     */
    public function setUuidArray(array $uuidArray): self
    {
        $this->initialized['uuidArray'] = true;
        $this->uuidArray = $uuidArray;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getEmailArray(): array
    {
        return $this->emailArray;
    }
    /**
     * @param list<string> $emailArray
     *
     * @return self
     */
    public function setEmailArray(array $emailArray): self
    {
        $this->initialized['emailArray'] = true;
        $this->emailArray = $emailArray;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getEnumArray(): array
    {
        return $this->enumArray;
    }
    /**
     * @param list<string> $enumArray
     *
     * @return self
     */
    public function setEnumArray(array $enumArray): self
    {
        $this->initialized['enumArray'] = true;
        $this->enumArray = $enumArray;
        return $this;
    }
    /**
     * @return list<int>
     */
    public function getIntegerArray(): array
    {
        return $this->integerArray;
    }
    /**
     * @param list<int> $integerArray
     *
     * @return self
     */
    public function setIntegerArray(array $integerArray): self
    {
        $this->initialized['integerArray'] = true;
        $this->integerArray = $integerArray;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getConstrainedStringArray(): array
    {
        return $this->constrainedStringArray;
    }
    /**
     * @param list<string> $constrainedStringArray
     *
     * @return self
     */
    public function setConstrainedStringArray(array $constrainedStringArray): self
    {
        $this->initialized['constrainedStringArray'] = true;
        $this->constrainedStringArray = $constrainedStringArray;
        return $this;
    }
}