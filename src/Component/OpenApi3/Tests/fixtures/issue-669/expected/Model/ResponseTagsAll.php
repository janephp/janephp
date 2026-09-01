<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseTagsAll implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<Tags>
     */
    public array $tags;
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
        return ['tags' => 'tags', 'links' => 'links', 'meta' => 'meta'];
    }
}