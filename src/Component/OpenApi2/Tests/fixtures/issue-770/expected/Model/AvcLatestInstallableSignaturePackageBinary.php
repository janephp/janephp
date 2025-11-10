<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcLatestInstallableSignaturePackageBinary
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
     * File name of the latest installable Signature Package Binary
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
     * File name of the latest installable Signature Package Binary
     *
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * File name of the latest installable Signature Package Binary
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
}