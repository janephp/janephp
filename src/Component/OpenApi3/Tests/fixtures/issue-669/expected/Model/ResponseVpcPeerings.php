<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseVpcPeerings implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<array<string, mixed>>
     */
    public array $peerings;
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
        return ['peerings' => 'peerings', 'links' => 'links', 'meta' => 'meta'];
    }
}