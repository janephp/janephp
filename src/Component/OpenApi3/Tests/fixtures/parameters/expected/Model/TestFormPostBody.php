<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class TestFormPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    protected $testDefault = 'test';
    /**
     * 
     *
     * @return string
     */
    public function getTestString() : string
    {
        return $this->testString;
    }
    /**
     * 
     *
     * @param string $testString
     *
     * @return self
     */
    public function setTestString(string $testString) : self
    {
        $this->initialized['testString'] = true;
        $this->testString = $testString;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTestInteger() : int
    {
        return $this->testInteger;
    }
    /**
     * 
     *
     * @param int $testInteger
     *
     * @return self
     */
    public function setTestInteger(int $testInteger) : self
    {
        $this->initialized['testInteger'] = true;
        $this->testInteger = $testInteger;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTestFloat() : float
    {
        return $this->testFloat;
    }
    /**
     * 
     *
     * @param float $testFloat
     *
     * @return self
     */
    public function setTestFloat(float $testFloat) : self
    {
        $this->initialized['testFloat'] = true;
        $this->testFloat = $testFloat;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getTestArray() : array
    {
        return $this->testArray;
    }
    /**
     * 
     *
     * @param mixed[] $testArray
     *
     * @return self
     */
    public function setTestArray(array $testArray) : self
    {
        $this->initialized['testArray'] = true;
        $this->testArray = $testArray;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTestRequired() : string
    {
        return $this->testRequired;
    }
    /**
     * 
     *
     * @param string $testRequired
     *
     * @return self
     */
    public function setTestRequired(string $testRequired) : self
    {
        $this->initialized['testRequired'] = true;
        $this->testRequired = $testRequired;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTestDefault() : string
    {
        return $this->testDefault;
    }
    /**
     * 
     *
     * @param string $testDefault
     *
     * @return self
     */
    public function setTestDefault(string $testDefault) : self
    {
        $this->initialized['testDefault'] = true;
        $this->testDefault = $testDefault;
        return $this;
    }
}