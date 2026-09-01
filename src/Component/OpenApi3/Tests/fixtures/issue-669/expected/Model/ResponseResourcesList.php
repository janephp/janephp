<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseResourcesList implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The resources that are assigned to this project. Only resources that you are authorized to see will be returned.
     *
     * @var list<Resource>
     */
    public array $resources;
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
        return ['resources' => 'resources', 'links' => 'links', 'meta' => 'meta'];
    }
}