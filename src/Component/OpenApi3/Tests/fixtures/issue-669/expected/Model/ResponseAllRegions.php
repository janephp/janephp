<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAllRegions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<Region>
     */
    public array $regions;
    /**
     * @var PageLinks
     */
    public PageLinks $links;
    /**
     * @var MetaMeta
     */
    public MetaMeta $meta;
    public function definedProperties(): array
    {
        return ['regions' => 'regions', 'links' => 'links', 'meta' => 'meta'];
    }
}