<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class DomainDevicePolicyModifyDomainDevicePolicy
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * defaultAction of the device policy config
     *
     * @var string
     */
    public string $defaultAction;
    /**
     * rule of the device policy config
     *
     * @var list<DomainDevicePolicyDomainDevicePolicyRule>
     */
    public array $rule;
}