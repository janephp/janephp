<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class BackwardLinks implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * URI of the first page of the results.
     *
     * @var string
     */
    public string $first;
    /**
     * URI of the previous page of the results.
     *
     * @var string
     */
    public string $prev;
    public function definedProperties(): array
    {
        return ['first' => 'first', 'prev' => 'prev'];
    }
}