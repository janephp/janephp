<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LinkToPrevPage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * URI of the previous page of the results.
     *
     * @var string
     */
    public string $prev;
    public function definedProperties(): array
    {
        return ['prev' => 'prev'];
    }
}