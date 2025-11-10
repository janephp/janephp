<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcLatestInstallableSignaturePackage
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
     * The version of the latest installable signature package
     *
     * @var string
     */
    protected $version;
    /**
     * The binaries information of the latest installable signature package
     *
     * @var list<AvcLatestInstallableSignaturePackageBinary>
     */
    protected $binariesInfo;
    /**
     * The last checked time for the latest installable signature package
     *
     * @var int
     */
    protected $lastCheckedTime;
    /**
     * The version of the latest installable signature package
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * The version of the latest installable signature package
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
     * The binaries information of the latest installable signature package
     *
     * @return list<AvcLatestInstallableSignaturePackageBinary>
     */
    public function getBinariesInfo(): array
    {
        return $this->binariesInfo;
    }
    /**
     * The binaries information of the latest installable signature package
     *
     * @param list<AvcLatestInstallableSignaturePackageBinary> $binariesInfo
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
     * The last checked time for the latest installable signature package
     *
     * @return int
     */
    public function getLastCheckedTime(): int
    {
        return $this->lastCheckedTime;
    }
    /**
     * The last checked time for the latest installable signature package
     *
     * @param int $lastCheckedTime
     *
     * @return self
     */
    public function setLastCheckedTime(int $lastCheckedTime): self
    {
        $this->initialized['lastCheckedTime'] = true;
        $this->lastCheckedTime = $lastCheckedTime;
        return $this;
    }
}