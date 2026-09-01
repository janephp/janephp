<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseConnectionPool implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ConnectionPool
     */
    public ConnectionPool $pool;
    public function definedProperties(): array
    {
        return ['pool' => 'pool'];
    }
}