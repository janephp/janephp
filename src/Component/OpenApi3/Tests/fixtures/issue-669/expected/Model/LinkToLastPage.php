<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LinkToLastPage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * URI of the last page of the results.
     *
     * @var string
     */
    public string $last;
    public function definedProperties(): array
    {
        return ['last' => 'last'];
    }
}