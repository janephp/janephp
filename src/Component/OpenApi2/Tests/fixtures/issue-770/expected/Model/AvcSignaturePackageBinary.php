<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcSignaturePackageBinary
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
     * File name of the Signature Package Binary
     *
     * @var string
     */
    protected $fileName;
    /**
     * @var string
     */
    protected $platform;
    /**
     * @var string
     */
    protected $type;
    /**
     * The size of signature package binary file
     *
     * @var int
     */
    protected $size;
    /**
     * File name of the Signature Package Binary
     *
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * File name of the Signature Package Binary
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName): self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * @return string
     */
    public function getPlatform(): string
    {
        return $this->platform;
    }
    /**
     * @param string $platform
     *
     * @return self
     */
    public function setPlatform(string $platform): self
    {
        $this->initialized['platform'] = true;
        $this->platform = $platform;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The size of signature package binary file
     *
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
    /**
     * The size of signature package binary file
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
}