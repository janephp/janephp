<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationUpgradeHistorySummary
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
     * startTime of the upgrade history
     *
     * @var string
     */
    protected $startTime;
    /**
     * version of the upgrade history
     *
     * @var string
     */
    protected $version;
    /**
     * cbVersion of the upgrade history
     *
     * @var string
     */
    protected $cbVersion;
    /**
     * dpVersion of the upgrade history
     *
     * @var string
     */
    protected $dpVersion;
    /**
     * apFwVersion of the upgrade history
     *
     * @var string
     */
    protected $apFwVersion;
    /**
     * oldVersion of the upgrade history
     *
     * @var string
     */
    protected $oldVersion;
    /**
     * oldCbVersion of the upgrade history
     *
     * @var string
     */
    protected $oldCbVersion;
    /**
     * oldDpVersion of the upgrade history
     *
     * @var string
     */
    protected $oldDpVersion;
    /**
     * oldApFwVersion of the upgrade history
     *
     * @var string
     */
    protected $oldApFwVersion;
    /**
     * fileName of the upgrade history
     *
     * @var string
     */
    protected $fileName;
    /**
     * elapsedSeconds of the upgrade history
     *
     * @var int
     */
    protected $elapsedSeconds;
    /**
     * startTime of the upgrade history
     *
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->startTime;
    }
    /**
     * startTime of the upgrade history
     *
     * @param string $startTime
     *
     * @return self
     */
    public function setStartTime(string $startTime): self
    {
        $this->initialized['startTime'] = true;
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * version of the upgrade history
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * version of the upgrade history
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
     * cbVersion of the upgrade history
     *
     * @return string
     */
    public function getCbVersion(): string
    {
        return $this->cbVersion;
    }
    /**
     * cbVersion of the upgrade history
     *
     * @param string $cbVersion
     *
     * @return self
     */
    public function setCbVersion(string $cbVersion): self
    {
        $this->initialized['cbVersion'] = true;
        $this->cbVersion = $cbVersion;
        return $this;
    }
    /**
     * dpVersion of the upgrade history
     *
     * @return string
     */
    public function getDpVersion(): string
    {
        return $this->dpVersion;
    }
    /**
     * dpVersion of the upgrade history
     *
     * @param string $dpVersion
     *
     * @return self
     */
    public function setDpVersion(string $dpVersion): self
    {
        $this->initialized['dpVersion'] = true;
        $this->dpVersion = $dpVersion;
        return $this;
    }
    /**
     * apFwVersion of the upgrade history
     *
     * @return string
     */
    public function getApFwVersion(): string
    {
        return $this->apFwVersion;
    }
    /**
     * apFwVersion of the upgrade history
     *
     * @param string $apFwVersion
     *
     * @return self
     */
    public function setApFwVersion(string $apFwVersion): self
    {
        $this->initialized['apFwVersion'] = true;
        $this->apFwVersion = $apFwVersion;
        return $this;
    }
    /**
     * oldVersion of the upgrade history
     *
     * @return string
     */
    public function getOldVersion(): string
    {
        return $this->oldVersion;
    }
    /**
     * oldVersion of the upgrade history
     *
     * @param string $oldVersion
     *
     * @return self
     */
    public function setOldVersion(string $oldVersion): self
    {
        $this->initialized['oldVersion'] = true;
        $this->oldVersion = $oldVersion;
        return $this;
    }
    /**
     * oldCbVersion of the upgrade history
     *
     * @return string
     */
    public function getOldCbVersion(): string
    {
        return $this->oldCbVersion;
    }
    /**
     * oldCbVersion of the upgrade history
     *
     * @param string $oldCbVersion
     *
     * @return self
     */
    public function setOldCbVersion(string $oldCbVersion): self
    {
        $this->initialized['oldCbVersion'] = true;
        $this->oldCbVersion = $oldCbVersion;
        return $this;
    }
    /**
     * oldDpVersion of the upgrade history
     *
     * @return string
     */
    public function getOldDpVersion(): string
    {
        return $this->oldDpVersion;
    }
    /**
     * oldDpVersion of the upgrade history
     *
     * @param string $oldDpVersion
     *
     * @return self
     */
    public function setOldDpVersion(string $oldDpVersion): self
    {
        $this->initialized['oldDpVersion'] = true;
        $this->oldDpVersion = $oldDpVersion;
        return $this;
    }
    /**
     * oldApFwVersion of the upgrade history
     *
     * @return string
     */
    public function getOldApFwVersion(): string
    {
        return $this->oldApFwVersion;
    }
    /**
     * oldApFwVersion of the upgrade history
     *
     * @param string $oldApFwVersion
     *
     * @return self
     */
    public function setOldApFwVersion(string $oldApFwVersion): self
    {
        $this->initialized['oldApFwVersion'] = true;
        $this->oldApFwVersion = $oldApFwVersion;
        return $this;
    }
    /**
     * fileName of the upgrade history
     *
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * fileName of the upgrade history
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
     * elapsedSeconds of the upgrade history
     *
     * @return int
     */
    public function getElapsedSeconds(): int
    {
        return $this->elapsedSeconds;
    }
    /**
     * elapsedSeconds of the upgrade history
     *
     * @param int $elapsedSeconds
     *
     * @return self
     */
    public function setElapsedSeconds(int $elapsedSeconds): self
    {
        $this->initialized['elapsedSeconds'] = true;
        $this->elapsedSeconds = $elapsedSeconds;
        return $this;
    }
}