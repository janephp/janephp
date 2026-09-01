<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsStringMatch implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Exact string match. Only 1 of `exact`, `prefix`, or `regex` must be set.
     *
     * @var string
     */
    public string $exact;
    /**
     * Prefix-based match. Only 1 of `exact`, `prefix`, or `regex` must be set.
     *
     * @deprecated
     *
     * @var string
     */
    public string $prefix;
    /**
     * RE2 style regex-based match. Only 1 of `exact`, `prefix`, or `regex` must be set. For more information about RE2 syntax, see: https://github.com/google/re2/wiki/Syntax
     *
     * @var string
     */
    public string $regex;
    public function definedProperties(): array
    {
        return ['exact' => 'exact', 'prefix' => 'prefix', 'regex' => 'regex'];
    }
}