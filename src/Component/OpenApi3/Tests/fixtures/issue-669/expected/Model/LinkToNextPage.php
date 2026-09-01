<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LinkToNextPage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * URI of the next page of the results.
     *
     * @var string
     */
    public string $next;
    public function definedProperties(): array
    {
        return ['next' => 'next'];
    }
}