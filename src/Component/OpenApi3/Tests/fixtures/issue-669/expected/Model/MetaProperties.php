<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MetaProperties implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Number of objects returned by the request.
     *
     * @var int
     */
    public int $total;
    public function definedProperties(): array
    {
        return ['total' => 'total'];
    }
}