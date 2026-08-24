<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class TestFormFilePostBody extends \ArrayObject
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
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    protected $testFile;
    /**
     * @return string|resource|\Psr\Http\Message\StreamInterface
     */
    public function getTestFile()
    {
        return $this->testFile;
    }
    /**
     * @param string|resource|\Psr\Http\Message\StreamInterface $testFile
     *
     * @return self
     */
    public function setTestFile($testFile): self
    {
        $this->initialized['testFile'] = true;
        $this->testFile = $testFile;
        return $this;
    }
}