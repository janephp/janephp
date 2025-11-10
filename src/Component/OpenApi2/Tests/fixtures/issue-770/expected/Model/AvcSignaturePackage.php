<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcSignaturePackage
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
     * Identifier of the Signature Package
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the Signature Package
     *
     * @var string
     */
    protected $fileName;
    /**
     * Version of the Signature Package
     *
     * @var string
     */
    protected $version;
    /**
     * Size of the Signature Package
     *
     * @var int
     */
    protected $size;
    /**
     * General information about the binary files in the Signature Package
     *
     * @var list<AvcSignaturePackageBinary>
     */
    protected $binariesInfo;
    /**
     * @var AvcCheckLatestInstallableSignaturePackageSettings
     */
    protected $checkLatestInstallableSettings;
    /**
     * @var AvcLatestInstallableSignaturePackage
     */
    protected $latestInstallable;
    /**
     * Identifier of the Signature Package
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the Signature Package
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Name of the Signature Package
     *
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * Name of the Signature Package
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
     * Version of the Signature Package
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * Version of the Signature Package
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
     * Size of the Signature Package
     *
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
    /**
     * Size of the Signature Package
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
    /**
     * General information about the binary files in the Signature Package
     *
     * @return list<AvcSignaturePackageBinary>
     */
    public function getBinariesInfo(): array
    {
        return $this->binariesInfo;
    }
    /**
     * General information about the binary files in the Signature Package
     *
     * @param list<AvcSignaturePackageBinary> $binariesInfo
     *
     * @return self
     */
    public function setBinariesInfo(array $binariesInfo): self
    {
        $this->initialized['binariesInfo'] = true;
        $this->binariesInfo = $binariesInfo;
        return $this;
    }
    /**
     * @return AvcCheckLatestInstallableSignaturePackageSettings
     */
    public function getCheckLatestInstallableSettings(): AvcCheckLatestInstallableSignaturePackageSettings
    {
        return $this->checkLatestInstallableSettings;
    }
    /**
     * @param AvcCheckLatestInstallableSignaturePackageSettings $checkLatestInstallableSettings
     *
     * @return self
     */
    public function setCheckLatestInstallableSettings(AvcCheckLatestInstallableSignaturePackageSettings $checkLatestInstallableSettings): self
    {
        $this->initialized['checkLatestInstallableSettings'] = true;
        $this->checkLatestInstallableSettings = $checkLatestInstallableSettings;
        return $this;
    }
    /**
     * @return AvcLatestInstallableSignaturePackage
     */
    public function getLatestInstallable(): AvcLatestInstallableSignaturePackage
    {
        return $this->latestInstallable;
    }
    /**
     * @param AvcLatestInstallableSignaturePackage $latestInstallable
     *
     * @return self
     */
    public function setLatestInstallable(AvcLatestInstallableSignaturePackage $latestInstallable): self
    {
        $this->initialized['latestInstallable'] = true;
        $this->latestInstallable = $latestInstallable;
        return $this;
    }
}