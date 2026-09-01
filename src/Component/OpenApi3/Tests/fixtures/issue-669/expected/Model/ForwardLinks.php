<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ForwardLinks implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * URI of the last page of the results.
     *
     * @var string
     */
    public string $last;
    /**
     * URI of the next page of the results.
     *
     * @var string
     */
    public string $next;
    public function definedProperties(): array
    {
        return ['last' => 'last', 'next' => 'next'];
    }
}