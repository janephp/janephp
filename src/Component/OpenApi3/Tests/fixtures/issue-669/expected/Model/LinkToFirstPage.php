<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LinkToFirstPage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * URI of the first page of the results.
     *
     * @var string
     */
    public string $first;
    public function definedProperties(): array
    {
        return ['first' => 'first'];
    }
}