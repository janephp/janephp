<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileCreateDPGroup
{
    /**
     * DP Group name
     *
     * @var string
     */
    public string $name;
    /**
     * The description of the DP Group
     *
     * @var mixed
     */
    public $description;
    /**
     * @var list<string>
     */
    public array $dpGroupList;
}