<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApmodelCommonAttribute
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
     * @var list<int>
     */
    protected $nonEditablePorts;
    /**
     * @var bool
     */
    protected $isAllowDisableExtAnt;
    /**
     * @var list<int>
     */
    protected $nonVisiblePorts;
    /**
     * @var bool
     */
    protected $hasScanRadio;
    /**
     * @var bool
     */
    protected $hasCablemodem;
    /**
     * @var bool
     */
    protected $hasGps;
    /**
     * @var bool
     */
    protected $isDualRadio;
    /**
     * @var bool
     */
    protected $isOutdoor;
    /**
     * @var int
     */
    protected $maxChannelization24G;
    /**
     * @var int
     */
    protected $maxChannelization5G;
    /**
     * @var int
     */
    protected $maxClientsUpper;
    /**
     * @var int
     */
    protected $maxWlanNum24G;
    /**
     * @var int
     */
    protected $maxWlanNum5G;
    /**
     * @var bool
     */
    protected $noAvc;
    /**
     * @var bool
     */
    protected $noMesh;
    /**
     * @var string
     */
    protected $meshRadioCaps;
    /**
     * @var int
     */
    protected $reserved5GWlanForMesh;
    /**
     * @var bool
     */
    protected $support11AC;
    /**
     * @var bool
     */
    protected $supportChannelization160;
    /**
     * @var bool
     */
    protected $supportAPUsbSoftwarePackage;
    /**
     * @var bool
     */
    protected $supportBandSwitch;
    /**
     * @var bool
     */
    protected $supportBonjour;
    /**
     * @var bool
     */
    protected $supportIpsec;
    /**
     * @var bool
     */
    protected $supportLBS;
    /**
     * @var bool
     */
    protected $supportResetCablemodem;
    /**
     * @var string
     */
    protected $allowDfsCountry;
    /**
     * @var int
     */
    protected $ram;
    /**
     * @var int
     */
    protected $numOfCores;
    /**
     * @var int
     */
    protected $cpuFrequency;
    /**
     * @var int
     */
    protected $scalingFactor;
    /**
     * @var int
     */
    protected $capabilityScore;
    /**
     * @var string
     */
    protected $poeModeCaps;
    /**
     * @return list<int>
     */
    public function getNonEditablePorts(): array
    {
        return $this->nonEditablePorts;
    }
    /**
     * @param list<int> $nonEditablePorts
     *
     * @return self
     */
    public function setNonEditablePorts(array $nonEditablePorts): self
    {
        $this->initialized['nonEditablePorts'] = true;
        $this->nonEditablePorts = $nonEditablePorts;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsAllowDisableExtAnt(): bool
    {
        return $this->isAllowDisableExtAnt;
    }
    /**
     * @param bool $isAllowDisableExtAnt
     *
     * @return self
     */
    public function setIsAllowDisableExtAnt(bool $isAllowDisableExtAnt): self
    {
        $this->initialized['isAllowDisableExtAnt'] = true;
        $this->isAllowDisableExtAnt = $isAllowDisableExtAnt;
        return $this;
    }
    /**
     * @return list<int>
     */
    public function getNonVisiblePorts(): array
    {
        return $this->nonVisiblePorts;
    }
    /**
     * @param list<int> $nonVisiblePorts
     *
     * @return self
     */
    public function setNonVisiblePorts(array $nonVisiblePorts): self
    {
        $this->initialized['nonVisiblePorts'] = true;
        $this->nonVisiblePorts = $nonVisiblePorts;
        return $this;
    }
    /**
     * @return bool
     */
    public function getHasScanRadio(): bool
    {
        return $this->hasScanRadio;
    }
    /**
     * @param bool $hasScanRadio
     *
     * @return self
     */
    public function setHasScanRadio(bool $hasScanRadio): self
    {
        $this->initialized['hasScanRadio'] = true;
        $this->hasScanRadio = $hasScanRadio;
        return $this;
    }
    /**
     * @return bool
     */
    public function getHasCablemodem(): bool
    {
        return $this->hasCablemodem;
    }
    /**
     * @param bool $hasCablemodem
     *
     * @return self
     */
    public function setHasCablemodem(bool $hasCablemodem): self
    {
        $this->initialized['hasCablemodem'] = true;
        $this->hasCablemodem = $hasCablemodem;
        return $this;
    }
    /**
     * @return bool
     */
    public function getHasGps(): bool
    {
        return $this->hasGps;
    }
    /**
     * @param bool $hasGps
     *
     * @return self
     */
    public function setHasGps(bool $hasGps): self
    {
        $this->initialized['hasGps'] = true;
        $this->hasGps = $hasGps;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsDualRadio(): bool
    {
        return $this->isDualRadio;
    }
    /**
     * @param bool $isDualRadio
     *
     * @return self
     */
    public function setIsDualRadio(bool $isDualRadio): self
    {
        $this->initialized['isDualRadio'] = true;
        $this->isDualRadio = $isDualRadio;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsOutdoor(): bool
    {
        return $this->isOutdoor;
    }
    /**
     * @param bool $isOutdoor
     *
     * @return self
     */
    public function setIsOutdoor(bool $isOutdoor): self
    {
        $this->initialized['isOutdoor'] = true;
        $this->isOutdoor = $isOutdoor;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxChannelization24G(): int
    {
        return $this->maxChannelization24G;
    }
    /**
     * @param int $maxChannelization24G
     *
     * @return self
     */
    public function setMaxChannelization24G(int $maxChannelization24G): self
    {
        $this->initialized['maxChannelization24G'] = true;
        $this->maxChannelization24G = $maxChannelization24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxChannelization5G(): int
    {
        return $this->maxChannelization5G;
    }
    /**
     * @param int $maxChannelization5G
     *
     * @return self
     */
    public function setMaxChannelization5G(int $maxChannelization5G): self
    {
        $this->initialized['maxChannelization5G'] = true;
        $this->maxChannelization5G = $maxChannelization5G;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxClientsUpper(): int
    {
        return $this->maxClientsUpper;
    }
    /**
     * @param int $maxClientsUpper
     *
     * @return self
     */
    public function setMaxClientsUpper(int $maxClientsUpper): self
    {
        $this->initialized['maxClientsUpper'] = true;
        $this->maxClientsUpper = $maxClientsUpper;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxWlanNum24G(): int
    {
        return $this->maxWlanNum24G;
    }
    /**
     * @param int $maxWlanNum24G
     *
     * @return self
     */
    public function setMaxWlanNum24G(int $maxWlanNum24G): self
    {
        $this->initialized['maxWlanNum24G'] = true;
        $this->maxWlanNum24G = $maxWlanNum24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxWlanNum5G(): int
    {
        return $this->maxWlanNum5G;
    }
    /**
     * @param int $maxWlanNum5G
     *
     * @return self
     */
    public function setMaxWlanNum5G(int $maxWlanNum5G): self
    {
        $this->initialized['maxWlanNum5G'] = true;
        $this->maxWlanNum5G = $maxWlanNum5G;
        return $this;
    }
    /**
     * @return bool
     */
    public function getNoAvc(): bool
    {
        return $this->noAvc;
    }
    /**
     * @param bool $noAvc
     *
     * @return self
     */
    public function setNoAvc(bool $noAvc): self
    {
        $this->initialized['noAvc'] = true;
        $this->noAvc = $noAvc;
        return $this;
    }
    /**
     * @return bool
     */
    public function getNoMesh(): bool
    {
        return $this->noMesh;
    }
    /**
     * @param bool $noMesh
     *
     * @return self
     */
    public function setNoMesh(bool $noMesh): self
    {
        $this->initialized['noMesh'] = true;
        $this->noMesh = $noMesh;
        return $this;
    }
    /**
     * @return string
     */
    public function getMeshRadioCaps(): string
    {
        return $this->meshRadioCaps;
    }
    /**
     * @param string $meshRadioCaps
     *
     * @return self
     */
    public function setMeshRadioCaps(string $meshRadioCaps): self
    {
        $this->initialized['meshRadioCaps'] = true;
        $this->meshRadioCaps = $meshRadioCaps;
        return $this;
    }
    /**
     * @return int
     */
    public function getReserved5GWlanForMesh(): int
    {
        return $this->reserved5GWlanForMesh;
    }
    /**
     * @param int $reserved5GWlanForMesh
     *
     * @return self
     */
    public function setReserved5GWlanForMesh(int $reserved5GWlanForMesh): self
    {
        $this->initialized['reserved5GWlanForMesh'] = true;
        $this->reserved5GWlanForMesh = $reserved5GWlanForMesh;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSupport11AC(): bool
    {
        return $this->support11AC;
    }
    /**
     * @param bool $support11AC
     *
     * @return self
     */
    public function setSupport11AC(bool $support11AC): self
    {
        $this->initialized['support11AC'] = true;
        $this->support11AC = $support11AC;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSupportChannelization160(): bool
    {
        return $this->supportChannelization160;
    }
    /**
     * @param bool $supportChannelization160
     *
     * @return self
     */
    public function setSupportChannelization160(bool $supportChannelization160): self
    {
        $this->initialized['supportChannelization160'] = true;
        $this->supportChannelization160 = $supportChannelization160;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSupportAPUsbSoftwarePackage(): bool
    {
        return $this->supportAPUsbSoftwarePackage;
    }
    /**
     * @param bool $supportAPUsbSoftwarePackage
     *
     * @return self
     */
    public function setSupportAPUsbSoftwarePackage(bool $supportAPUsbSoftwarePackage): self
    {
        $this->initialized['supportAPUsbSoftwarePackage'] = true;
        $this->supportAPUsbSoftwarePackage = $supportAPUsbSoftwarePackage;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSupportBandSwitch(): bool
    {
        return $this->supportBandSwitch;
    }
    /**
     * @param bool $supportBandSwitch
     *
     * @return self
     */
    public function setSupportBandSwitch(bool $supportBandSwitch): self
    {
        $this->initialized['supportBandSwitch'] = true;
        $this->supportBandSwitch = $supportBandSwitch;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSupportBonjour(): bool
    {
        return $this->supportBonjour;
    }
    /**
     * @param bool $supportBonjour
     *
     * @return self
     */
    public function setSupportBonjour(bool $supportBonjour): self
    {
        $this->initialized['supportBonjour'] = true;
        $this->supportBonjour = $supportBonjour;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSupportIpsec(): bool
    {
        return $this->supportIpsec;
    }
    /**
     * @param bool $supportIpsec
     *
     * @return self
     */
    public function setSupportIpsec(bool $supportIpsec): self
    {
        $this->initialized['supportIpsec'] = true;
        $this->supportIpsec = $supportIpsec;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSupportLBS(): bool
    {
        return $this->supportLBS;
    }
    /**
     * @param bool $supportLBS
     *
     * @return self
     */
    public function setSupportLBS(bool $supportLBS): self
    {
        $this->initialized['supportLBS'] = true;
        $this->supportLBS = $supportLBS;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSupportResetCablemodem(): bool
    {
        return $this->supportResetCablemodem;
    }
    /**
     * @param bool $supportResetCablemodem
     *
     * @return self
     */
    public function setSupportResetCablemodem(bool $supportResetCablemodem): self
    {
        $this->initialized['supportResetCablemodem'] = true;
        $this->supportResetCablemodem = $supportResetCablemodem;
        return $this;
    }
    /**
     * @return string
     */
    public function getAllowDfsCountry(): string
    {
        return $this->allowDfsCountry;
    }
    /**
     * @param string $allowDfsCountry
     *
     * @return self
     */
    public function setAllowDfsCountry(string $allowDfsCountry): self
    {
        $this->initialized['allowDfsCountry'] = true;
        $this->allowDfsCountry = $allowDfsCountry;
        return $this;
    }
    /**
     * @return int
     */
    public function getRam(): int
    {
        return $this->ram;
    }
    /**
     * @param int $ram
     *
     * @return self
     */
    public function setRam(int $ram): self
    {
        $this->initialized['ram'] = true;
        $this->ram = $ram;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumOfCores(): int
    {
        return $this->numOfCores;
    }
    /**
     * @param int $numOfCores
     *
     * @return self
     */
    public function setNumOfCores(int $numOfCores): self
    {
        $this->initialized['numOfCores'] = true;
        $this->numOfCores = $numOfCores;
        return $this;
    }
    /**
     * @return int
     */
    public function getCpuFrequency(): int
    {
        return $this->cpuFrequency;
    }
    /**
     * @param int $cpuFrequency
     *
     * @return self
     */
    public function setCpuFrequency(int $cpuFrequency): self
    {
        $this->initialized['cpuFrequency'] = true;
        $this->cpuFrequency = $cpuFrequency;
        return $this;
    }
    /**
     * @return int
     */
    public function getScalingFactor(): int
    {
        return $this->scalingFactor;
    }
    /**
     * @param int $scalingFactor
     *
     * @return self
     */
    public function setScalingFactor(int $scalingFactor): self
    {
        $this->initialized['scalingFactor'] = true;
        $this->scalingFactor = $scalingFactor;
        return $this;
    }
    /**
     * @return int
     */
    public function getCapabilityScore(): int
    {
        return $this->capabilityScore;
    }
    /**
     * @param int $capabilityScore
     *
     * @return self
     */
    public function setCapabilityScore(int $capabilityScore): self
    {
        $this->initialized['capabilityScore'] = true;
        $this->capabilityScore = $capabilityScore;
        return $this;
    }
    /**
     * @return string
     */
    public function getPoeModeCaps(): string
    {
        return $this->poeModeCaps;
    }
    /**
     * @param string $poeModeCaps
     *
     * @return self
     */
    public function setPoeModeCaps(string $poeModeCaps): self
    {
        $this->initialized['poeModeCaps'] = true;
        $this->poeModeCaps = $poeModeCaps;
        return $this;
    }
}