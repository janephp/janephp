<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Pagination implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var PageLinks
     */
    public PageLinks $links;
    public function definedProperties(): array
    {
        return ['links' => 'links'];
    }
}