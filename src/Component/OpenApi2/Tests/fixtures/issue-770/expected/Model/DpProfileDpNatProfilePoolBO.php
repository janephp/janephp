<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class DpProfileDpNatProfilePoolBO
{
    /**
     * publicPrefix
     *
     * @var int
     */
    public int $publicPrefix;
    /**
     * profileId
     *
     * @var string
     */
    public string $profileId;
    /**
     * poolId
     *
     * @var string
     */
    public string $poolId;
    /**
     * natPortRange
     *
     * @var string
     */
    public string $natPortRange;
    /**
     * description
     *
     * @var string
     */
    public string $description;
    /**
     * @var string
     */
    public string $vlanType;
    /**
     * publicVlan
     *
     * @var int
     */
    public int $publicVlan;
    /**
     * privateVlanRange
     *
     * @var list<string>
     */
    public array $privateVlanRange;
    /**
     * privateQinqVlanRange
     *
     * @var list<DpProfileDpNatProfilePrivateQinqVlanRangeBO>
     */
    public array $privateQinqVlanRange;
    /**
     * publicAddressRange
     *
     * @var list<string>
     */
    public array $publicAddressRange;
    /**
     * poolName
     *
     * @var string
     */
    public string $poolName;
}