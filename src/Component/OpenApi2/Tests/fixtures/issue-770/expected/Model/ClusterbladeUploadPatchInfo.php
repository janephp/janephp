<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClusterbladeUploadPatchInfo
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
     * fileName of uploadPatchInfo
     *
     * @var string
     */
    protected $fileName;
    /**
     * fileSize of uploadPatchInfo
     *
     * @var float
     */
    protected $fileSize;
    /**
     * fileUploadPath of uploadPatchInfo
     *
     * @var string
     */
    protected $fileUploadPath;
    /**
     * controlbladeVersion of uploadPatchInfo
     *
     * @var string
     */
    protected $controlbladeVersion;
    /**
     * databladeVersion of uploadPatchInfo
     *
     * @var string
     */
    protected $databladeVersion;
    /**
     * apVersion of uploadPatchInfo
     *
     * @var string
     */
    protected $apVersion;
    /**
     * version of uploadPatchInfo
     *
     * @var string
     */
    protected $version;
    /**
     * allowVersions of uploadPatchInfo
     *
     * @var list<string>
     */
    protected $allowVersions;
    /**
     * fileName of uploadPatchInfo
     *
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * fileName of uploadPatchInfo
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
     * fileSize of uploadPatchInfo
     *
     * @return float
     */
    public function getFileSize(): float
    {
        return $this->fileSize;
    }
    /**
     * fileSize of uploadPatchInfo
     *
     * @param float $fileSize
     *
     * @return self
     */
    public function setFileSize(float $fileSize): self
    {
        $this->initialized['fileSize'] = true;
        $this->fileSize = $fileSize;
        return $this;
    }
    /**
     * fileUploadPath of uploadPatchInfo
     *
     * @return string
     */
    public function getFileUploadPath(): string
    {
        return $this->fileUploadPath;
    }
    /**
     * fileUploadPath of uploadPatchInfo
     *
     * @param string $fileUploadPath
     *
     * @return self
     */
    public function setFileUploadPath(string $fileUploadPath): self
    {
        $this->initialized['fileUploadPath'] = true;
        $this->fileUploadPath = $fileUploadPath;
        return $this;
    }
    /**
     * controlbladeVersion of uploadPatchInfo
     *
     * @return string
     */
    public function getControlbladeVersion(): string
    {
        return $this->controlbladeVersion;
    }
    /**
     * controlbladeVersion of uploadPatchInfo
     *
     * @param string $controlbladeVersion
     *
     * @return self
     */
    public function setControlbladeVersion(string $controlbladeVersion): self
    {
        $this->initialized['controlbladeVersion'] = true;
        $this->controlbladeVersion = $controlbladeVersion;
        return $this;
    }
    /**
     * databladeVersion of uploadPatchInfo
     *
     * @return string
     */
    public function getDatabladeVersion(): string
    {
        return $this->databladeVersion;
    }
    /**
     * databladeVersion of uploadPatchInfo
     *
     * @param string $databladeVersion
     *
     * @return self
     */
    public function setDatabladeVersion(string $databladeVersion): self
    {
        $this->initialized['databladeVersion'] = true;
        $this->databladeVersion = $databladeVersion;
        return $this;
    }
    /**
     * apVersion of uploadPatchInfo
     *
     * @return string
     */
    public function getApVersion(): string
    {
        return $this->apVersion;
    }
    /**
     * apVersion of uploadPatchInfo
     *
     * @param string $apVersion
     *
     * @return self
     */
    public function setApVersion(string $apVersion): self
    {
        $this->initialized['apVersion'] = true;
        $this->apVersion = $apVersion;
        return $this;
    }
    /**
     * version of uploadPatchInfo
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * version of uploadPatchInfo
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * allowVersions of uploadPatchInfo
     *
     * @return list<string>
     */
    public function getAllowVersions(): array
    {
        return $this->allowVersions;
    }
    /**
     * allowVersions of uploadPatchInfo
     *
     * @param list<string> $allowVersions
     *
     * @return self
     */
    public function setAllowVersions(array $allowVersions): self
    {
        $this->initialized['allowVersions'] = true;
        $this->allowVersions = $allowVersions;
        return $this;
    }
}