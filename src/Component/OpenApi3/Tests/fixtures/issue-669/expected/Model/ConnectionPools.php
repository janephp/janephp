<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ConnectionPools implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array of connection pool objects.
     *
     * @var list<ConnectionPool>
     */
    public array $pools;
    public function definedProperties(): array
    {
        return ['pools' => 'pools'];
    }
}