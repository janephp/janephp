<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class TestFormFilePostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $testFile;
    /**
     * 
     *
     * @return string
     */
    public function getTestFile() : string
    {
        return $this->testFile;
    }
    /**
     * 
     *
     * @param string $testFile
     *
     * @return self
     */
    public function setTestFile(string $testFile) : self
    {
        $this->initialized['testFile'] = true;
        $this->testFile = $testFile;
        return $this;
    }
}