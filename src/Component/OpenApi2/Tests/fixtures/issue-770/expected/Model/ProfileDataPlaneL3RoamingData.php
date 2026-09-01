<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileDataPlaneL3RoamingData
{
    /**
     * Data plane key
     *
     * @var string
     */
    public string $key;
    /**
     * Show if this DP is included in the L3 roaming feature or not, 0 means excluded and 1 means included
     *
     * @var int
     */
    public int $activated;
    /**
     * A list of L3 roaming configuration for this DP
     *
     * @var string
     */
    public string $value;
    /**
     * DP name
     *
     * @var string
     */
    public string $name;
    /**
     * DP firmware version
     *
     * @var string
     */
    public string $firmwareVersion;
    /**
     * @var string
     */
    public string $subCriteriaType;
}