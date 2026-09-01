<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApmodelLanPortSetting
{
    /**
     * @var string
     */
    public string $portName;
    /**
     * @var bool
     */
    public bool $enabled;
    /**
     * When overwriteVlanEnabled is true, vlanUntagId and members will override ethPortProfile
     *
     * @var bool
     */
    public bool $overwriteVlanEnabled;
    /**
     * @var int
     */
    public int $vlanUntagId;
    /**
     * @var string
     */
    public string $members;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $ethPortProfile;
}