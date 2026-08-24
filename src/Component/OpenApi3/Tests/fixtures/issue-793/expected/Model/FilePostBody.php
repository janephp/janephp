<?php

namespace Jane\Component\OpenApi3\Tests\ExpectedIssue793\Model;

class FilePostBody extends \ArrayObject
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
    protected $file;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string|resource|\Psr\Http\Message\StreamInterface|null
     */
    protected $fileNullable;
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string|resource|\Psr\Http\Message\StreamInterface|null
     */
    public function getFileNullable()
    {
        return $this->fileNullable;
    }
    /**
     * @param string|resource|\Psr\Http\Message\StreamInterface|null $fileNullable
     *
     * @return self
     */
    public function setFileNullable($fileNullable): self
    {
        $this->initialized['fileNullable'] = true;
        $this->fileNullable = $fileNullable;
        return $this;
    }
}