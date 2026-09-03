<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileProviderEAPAuthSetting
{
    /**
     * EAP auth info
     *
     * @var string
     */
    public string $info;
    /**
     * EAP auth type
     *
     * @var string
     */
    public string $type;
    /**
     * EAP auth vendor ID
     *
     * @var int
     */
    public int $vendorId;
    /**
     * EAP auth vendor type
     *
     * @var int
     */
    public int $vendorType;
}