<?php

namespace Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Model;

use Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Runtime\AdditionalPropertiesInterface;
class DocumentUpload implements AdditionalPropertiesInterface
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
    protected $file;
    /**
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    protected $preview;
    /**
     * @var string
     */
    protected $note;
    /**
     * @return string|resource|\Psr\Http\Message\StreamInterface
     */
    public function getFile()
    {
        return $this->file;
    }
    /**
     * @param string|resource|\Psr\Http\Message\StreamInterface $file
     *
     * @return self
     */
    public function setFile($file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
    /**
     * @return string|resource|\Psr\Http\Message\StreamInterface
     */
    public function getPreview()
    {
        return $this->preview;
    }
    /**
     * @param string|resource|\Psr\Http\Message\StreamInterface $preview
     *
     * @return self
     */
    public function setPreview($preview): self
    {
        $this->initialized['preview'] = true;
        $this->preview = $preview;
        return $this;
    }
    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }
    /**
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['file' => ['file', 'getFile', 'setFile'], 'preview' => ['preview', 'getPreview', 'setPreview'], 'note' => ['note', 'getNote', 'setNote']];
    }
}