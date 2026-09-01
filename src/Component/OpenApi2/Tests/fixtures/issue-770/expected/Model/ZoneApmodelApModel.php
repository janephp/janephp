<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneApmodelApModel
{
    /**
     * @var bool
     */
    public bool $ledStatusEnabled;
    /**
     * @var ApmodelLldpSetting
     */
    public ApmodelLldpSetting $lldp;
    /**
     * @var ApmodelLacpSetting
     */
    public ApmodelLacpSetting $lacp;
    /**
     * @var ApmodelCellularSettings
     */
    public ApmodelCellularSettings $cellularSettings;
    /**
     * @var string
     */
    public string $ledMode;
    /**
     * @var bool
     */
    public bool $internalHeaterEnabled;
    /**
     * @var bool
     */
    public bool $poeOutPortEnabled;
    /**
     * @var bool
     */
    public bool $usbPowerEnable;
    /**
     * @var string
     */
    public string $poeModeSetting;
    /**
     * Option to use 1, 2 or 4 Tx chains while AP power source is 802.3af PoE
     *
     * @var int
     */
    public int $poeTxChain = 2;
    /**
     * Band switch between 2.4GHz and 5GHz is provided in single radio AP ZF-7321, ZF-7321-U, and ZF-7441.
     *
     * @var string
     */
    public string $radioBand;
    /**
     * @var ApmodelExternalAntenna
     */
    public ApmodelExternalAntenna $externalAntenna24;
    /**
     * @var ApmodelExternalAntenna
     */
    public ApmodelExternalAntenna $externalAntenna50;
    /**
     * @var list<ZoneApmodelLanPortSetting>
     */
    public array $lanPorts;
}