<?php

namespace Jane\OpenApi\Tests\Expected\Model;

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
     * @return string|null
     */
    public function getTestFile() : ?string
    {
        return $this->testFile;
    }
    /**
     * 
     *
     * @param string|null $testFile
     *
     * @return self
     */
    public function setTestFile(?string $testFile) : self
    {
        $this->testFile = $testFile;
        return $this;
    }
}