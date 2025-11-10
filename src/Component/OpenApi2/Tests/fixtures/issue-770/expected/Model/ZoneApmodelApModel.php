<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneApmodelApModel
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
     * @var bool
     */
    protected $ledStatusEnabled;
    /**
     * @var ApmodelLldpSetting
     */
    protected $lldp;
    /**
     * @var ApmodelLacpSetting
     */
    protected $lacp;
    /**
     * @var ApmodelCellularSettings
     */
    protected $cellularSettings;
    /**
     * @var string
     */
    protected $ledMode;
    /**
     * @var bool
     */
    protected $internalHeaterEnabled;
    /**
     * @var bool
     */
    protected $poeOutPortEnabled;
    /**
     * @var bool
     */
    protected $usbPowerEnable;
    /**
     * @var string
     */
    protected $poeModeSetting;
    /**
     * Option to use 1, 2 or 4 Tx chains while AP power source is 802.3af PoE
     *
     * @var int
     */
    protected $poeTxChain = 2;
    /**
     * Band switch between 2.4GHz and 5GHz is provided in single radio AP ZF-7321, ZF-7321-U, and ZF-7441.
     *
     * @var string
     */
    protected $radioBand;
    /**
     * @var ApmodelExternalAntenna
     */
    protected $externalAntenna24;
    /**
     * @var ApmodelExternalAntenna
     */
    protected $externalAntenna50;
    /**
     * @var list<ZoneApmodelLanPortSetting>
     */
    protected $lanPorts;
    /**
     * @return bool
     */
    public function getLedStatusEnabled(): bool
    {
        return $this->ledStatusEnabled;
    }
    /**
     * @param bool $ledStatusEnabled
     *
     * @return self
     */
    public function setLedStatusEnabled(bool $ledStatusEnabled): self
    {
        $this->initialized['ledStatusEnabled'] = true;
        $this->ledStatusEnabled = $ledStatusEnabled;
        return $this;
    }
    /**
     * @return ApmodelLldpSetting
     */
    public function getLldp(): ApmodelLldpSetting
    {
        return $this->lldp;
    }
    /**
     * @param ApmodelLldpSetting $lldp
     *
     * @return self
     */
    public function setLldp(ApmodelLldpSetting $lldp): self
    {
        $this->initialized['lldp'] = true;
        $this->lldp = $lldp;
        return $this;
    }
    /**
     * @return ApmodelLacpSetting
     */
    public function getLacp(): ApmodelLacpSetting
    {
        return $this->lacp;
    }
    /**
     * @param ApmodelLacpSetting $lacp
     *
     * @return self
     */
    public function setLacp(ApmodelLacpSetting $lacp): self
    {
        $this->initialized['lacp'] = true;
        $this->lacp = $lacp;
        return $this;
    }
    /**
     * @return ApmodelCellularSettings
     */
    public function getCellularSettings(): ApmodelCellularSettings
    {
        return $this->cellularSettings;
    }
    /**
     * @param ApmodelCellularSettings $cellularSettings
     *
     * @return self
     */
    public function setCellularSettings(ApmodelCellularSettings $cellularSettings): self
    {
        $this->initialized['cellularSettings'] = true;
        $this->cellularSettings = $cellularSettings;
        return $this;
    }
    /**
     * @return string
     */
    public function getLedMode(): string
    {
        return $this->ledMode;
    }
    /**
     * @param string $ledMode
     *
     * @return self
     */
    public function setLedMode(string $ledMode): self
    {
        $this->initialized['ledMode'] = true;
        $this->ledMode = $ledMode;
        return $this;
    }
    /**
     * @return bool
     */
    public function getInternalHeaterEnabled(): bool
    {
        return $this->internalHeaterEnabled;
    }
    /**
     * @param bool $internalHeaterEnabled
     *
     * @return self
     */
    public function setInternalHeaterEnabled(bool $internalHeaterEnabled): self
    {
        $this->initialized['internalHeaterEnabled'] = true;
        $this->internalHeaterEnabled = $internalHeaterEnabled;
        return $this;
    }
    /**
     * @return bool
     */
    public function getPoeOutPortEnabled(): bool
    {
        return $this->poeOutPortEnabled;
    }
    /**
     * @param bool $poeOutPortEnabled
     *
     * @return self
     */
    public function setPoeOutPortEnabled(bool $poeOutPortEnabled): self
    {
        $this->initialized['poeOutPortEnabled'] = true;
        $this->poeOutPortEnabled = $poeOutPortEnabled;
        return $this;
    }
    /**
     * @return bool
     */
    public function getUsbPowerEnable(): bool
    {
        return $this->usbPowerEnable;
    }
    /**
     * @param bool $usbPowerEnable
     *
     * @return self
     */
    public function setUsbPowerEnable(bool $usbPowerEnable): self
    {
        $this->initialized['usbPowerEnable'] = true;
        $this->usbPowerEnable = $usbPowerEnable;
        return $this;
    }
    /**
     * @return string
     */
    public function getPoeModeSetting(): string
    {
        return $this->poeModeSetting;
    }
    /**
     * @param string $poeModeSetting
     *
     * @return self
     */
    public function setPoeModeSetting(string $poeModeSetting): self
    {
        $this->initialized['poeModeSetting'] = true;
        $this->poeModeSetting = $poeModeSetting;
        return $this;
    }
    /**
     * Option to use 1, 2 or 4 Tx chains while AP power source is 802.3af PoE
     *
     * @return int
     */
    public function getPoeTxChain(): int
    {
        return $this->poeTxChain;
    }
    /**
     * Option to use 1, 2 or 4 Tx chains while AP power source is 802.3af PoE
     *
     * @param int $poeTxChain
     *
     * @return self
     */
    public function setPoeTxChain(int $poeTxChain): self
    {
        $this->initialized['poeTxChain'] = true;
        $this->poeTxChain = $poeTxChain;
        return $this;
    }
    /**
     * Band switch between 2.4GHz and 5GHz is provided in single radio AP ZF-7321, ZF-7321-U, and ZF-7441.
     *
     * @return string
     */
    public function getRadioBand(): string
    {
        return $this->radioBand;
    }
    /**
     * Band switch between 2.4GHz and 5GHz is provided in single radio AP ZF-7321, ZF-7321-U, and ZF-7441.
     *
     * @param string $radioBand
     *
     * @return self
     */
    public function setRadioBand(string $radioBand): self
    {
        $this->initialized['radioBand'] = true;
        $this->radioBand = $radioBand;
        return $this;
    }
    /**
     * @return ApmodelExternalAntenna
     */
    public function getExternalAntenna24(): ApmodelExternalAntenna
    {
        return $this->externalAntenna24;
    }
    /**
     * @param ApmodelExternalAntenna $externalAntenna24
     *
     * @return self
     */
    public function setExternalAntenna24(ApmodelExternalAntenna $externalAntenna24): self
    {
        $this->initialized['externalAntenna24'] = true;
        $this->externalAntenna24 = $externalAntenna24;
        return $this;
    }
    /**
     * @return ApmodelExternalAntenna
     */
    public function getExternalAntenna50(): ApmodelExternalAntenna
    {
        return $this->externalAntenna50;
    }
    /**
     * @param ApmodelExternalAntenna $externalAntenna50
     *
     * @return self
     */
    public function setExternalAntenna50(ApmodelExternalAntenna $externalAntenna50): self
    {
        $this->initialized['externalAntenna50'] = true;
        $this->externalAntenna50 = $externalAntenna50;
        return $this;
    }
    /**
     * @return list<ZoneApmodelLanPortSetting>
     */
    public function getLanPorts(): array
    {
        return $this->lanPorts;
    }
    /**
     * @param list<ZoneApmodelLanPortSetting> $lanPorts
     *
     * @return self
     */
    public function setLanPorts(array $lanPorts): self
    {
        $this->initialized['lanPorts'] = true;
        $this->lanPorts = $lanPorts;
        return $this;
    }
}