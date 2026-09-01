<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpProfileDpDhcpProfileOptionSpaceApplyToBO
{
    /**
     * @var string
     */
    public string $spaceId;
    /**
     * name
     *
     * @var string
     */
    public string $name;
    /**
     * appliedPoolNames
     *
     * @var list<string>
     */
    public array $appliedPoolNames;
    /**
     * options
     *
     * @var list<DpProfileDpDhcpProfileOptionBO>
     */
    public array $options;
    /**
     * description
     *
     * @var string
     */
    public string $description;
}