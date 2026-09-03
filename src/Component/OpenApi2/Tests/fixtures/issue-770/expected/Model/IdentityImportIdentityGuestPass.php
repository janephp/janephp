<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class IdentityImportIdentityGuestPass
{
    /**
     * Domain Id
     *
     * @var string
     */
    public string $domainId;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $wlan;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $zone;
    /**
     * @var IdentityPassValidFor
     */
    public IdentityPassValidFor $passValidFor;
    /**
     * Pass effective since
     *
     * @var string
     */
    public string $passEffectSince;
    /**
     * Expire new guest pass if not used within
     *
     * @var int
     */
    public int $passUseDays;
    /**
     * @var IdentityMaxDevices
     */
    public IdentityMaxDevices $maxDevices;
    /**
     * @var IdentitySessionDuration
     */
    public IdentitySessionDuration $sessionDuration;
}