<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class UpdateRegistry implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A boolean value indicating that the garbage collection should be cancelled.
     *
     * @var bool
     */
    public bool $cancel;
    public function definedProperties(): array
    {
        return ['cancel' => 'cancel'];
    }
}