<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class VlanNameProfileVlanNameProfileWithEditInfo
{
    /**
     * @var string
     */
    public string $id;
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
    /**
     * @var string
     */
    public string $zoneId;
    /**
     * @var int
     */
    public int $createDateTime;
    /**
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * @var string
     */
    public string $creatorUsername;
    /**
     * @var string
     */
    public string $modifierUsername;
}