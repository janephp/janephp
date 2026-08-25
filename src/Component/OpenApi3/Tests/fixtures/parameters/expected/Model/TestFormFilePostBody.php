<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class TestFormFilePostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['testFile' => ['testFile', 'getTestFile', 'setTestFile']];
    }
}