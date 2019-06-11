<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class TestFormPostBody
{
    /**
     * 
     *
     * @var string
     */
    protected $testString;
    /**
     * 
     *
     * @var int
     */
    protected $testInteger;
    /**
     * 
     *
     * @var float
     */
    protected $testFloat;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $testArray;
    /**
     * 
     *
     * @var string
     */
    protected $testRequired;
    /**
     * 
     *
     * @var string
     */
    protected $testDefault;
    /**
     * 
     *
     * @return string|null
     */
    public function getTestString() : ?string
    {
        return $this->testString;
    }
    /**
     * 
     *
     * @param string|null $testString
     *
     * @return self
     */
    public function setTestString(?string $testString) : self
    {
        $this->testString = $testString;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTestInteger() : ?int
    {
        return $this->testInteger;
    }
    /**
     * 
     *
     * @param int|null $testInteger
     *
     * @return self
     */
    public function setTestInteger(?int $testInteger) : self
    {
        $this->testInteger = $testInteger;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTestFloat() : ?float
    {
        return $this->testFloat;
    }
    /**
     * 
     *
     * @param float|null $testFloat
     *
     * @return self
     */
    public function setTestFloat(?float $testFloat) : self
    {
        $this->testFloat = $testFloat;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getTestArray() : ?array
    {
        return $this->testArray;
    }
    /**
     * 
     *
     * @param mixed[]|null $testArray
     *
     * @return self
     */
    public function setTestArray(?array $testArray) : self
    {
        $this->testArray = $testArray;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTestRequired() : ?string
    {
        return $this->testRequired;
    }
    /**
     * 
     *
     * @param string|null $testRequired
     *
     * @return self
     */
    public function setTestRequired(?string $testRequired) : self
    {
        $this->testRequired = $testRequired;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTestDefault() : ?string
    {
        return $this->testDefault;
    }
    /**
     * 
     *
     * @param string|null $testDefault
     *
     * @return self
     */
    public function setTestDefault(?string $testDefault) : self
    {
        $this->testDefault = $testDefault;
        return $this;
    }
}