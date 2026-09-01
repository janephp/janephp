<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationUpgradeHistorySummary
{
    /**
     * startTime of the upgrade history
     *
     * @var string
     */
    public string $startTime;
    /**
     * version of the upgrade history
     *
     * @var string
     */
    public string $version;
    /**
     * cbVersion of the upgrade history
     *
     * @var string
     */
    public string $cbVersion;
    /**
     * dpVersion of the upgrade history
     *
     * @var string
     */
    public string $dpVersion;
    /**
     * apFwVersion of the upgrade history
     *
     * @var string
     */
    public string $apFwVersion;
    /**
     * oldVersion of the upgrade history
     *
     * @var string
     */
    public string $oldVersion;
    /**
     * oldCbVersion of the upgrade history
     *
     * @var string
     */
    public string $oldCbVersion;
    /**
     * oldDpVersion of the upgrade history
     *
     * @var string
     */
    public string $oldDpVersion;
    /**
     * oldApFwVersion of the upgrade history
     *
     * @var string
     */
    public string $oldApFwVersion;
    /**
     * fileName of the upgrade history
     *
     * @var string
     */
    public string $fileName;
    /**
     * elapsedSeconds of the upgrade history
     *
     * @var int
     */
    public int $elapsedSeconds;
}