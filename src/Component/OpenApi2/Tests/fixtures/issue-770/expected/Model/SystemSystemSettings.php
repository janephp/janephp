<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemSystemSettings
{
    /**
     * Enabled AP number limit feature or not
     *
     * @var bool
     */
    public bool $apNumberLimitEnabled;
    /**
     * @var list<SystemApNumberLimitSettingOfDomain>
     */
    public array $apNumberLimitSettingsOfDomain;
    /**
     * @var list<SystemApNumberLimitSettingOfZone>
     */
    public array $apNumberLimitSettingsOfZone;
    /**
     * Enabled AP Mac OUI feature or no
     *
     * @var bool
     */
    public bool $apMacOUIEnabled;
}