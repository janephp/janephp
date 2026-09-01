<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseVolumes implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Array of volumes.
     *
     * @var list<array<string, mixed>>
     */
    public array $volumes;
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
        return ['volumes' => 'volumes', 'links' => 'links', 'meta' => 'meta'];
    }
}