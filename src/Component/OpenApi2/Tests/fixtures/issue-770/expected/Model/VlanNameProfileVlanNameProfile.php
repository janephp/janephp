<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class VlanNameProfileVlanNameProfile
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
     * The mapping rules of VLAN Name
     *
     * @var list<VlanNameProfileVlanNameRule>
     */
    public array $rules;
}