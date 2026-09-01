<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SqlMode implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A string specifying the configured SQL modes for the MySQL cluster.
     *
     * @var string
     */
    public string $sqlMode;
    public function definedProperties(): array
    {
        return ['sqlMode' => 'sql_mode'];
    }
}