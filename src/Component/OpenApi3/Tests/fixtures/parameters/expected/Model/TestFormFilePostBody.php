<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class TestFormFilePostBody
{
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
        $this->testFile = $testFile;
        return $this;
    }
}