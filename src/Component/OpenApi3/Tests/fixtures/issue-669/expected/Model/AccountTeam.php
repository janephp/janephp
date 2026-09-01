<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AccountTeam implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique universal identifier for the current team.
     *
     * @var string
     */
    public string $uuid;
    /**
     * The name for the current team.
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['uuid' => 'uuid', 'name' => 'name'];
    }
}