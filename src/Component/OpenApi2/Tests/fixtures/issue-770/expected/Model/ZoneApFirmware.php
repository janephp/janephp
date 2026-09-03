<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ZoneApFirmware
{
    /**
     * version of the AP firmare
     *
     * @var string
     */
    public string $firmwareVersion;
    /**
     * summary of the AP Model is unsupported for AP firmware version.
     *
     * @var list<ZoneUnsupportedApModel>
     */
    public array $unsupportedApModelSummary;
    /**
     * version of the AP firmare is supported for Upgrade or Downgrade.
     *
     * @var bool
     */
    public bool $supported;
}