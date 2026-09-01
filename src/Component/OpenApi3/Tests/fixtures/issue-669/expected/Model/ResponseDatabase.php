<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Database
     */
    public Database $db;
    public function definedProperties(): array
    {
        return ['db' => 'db'];
    }
}