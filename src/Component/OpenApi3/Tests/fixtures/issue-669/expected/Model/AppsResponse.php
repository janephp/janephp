<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<App>
     */
    public array $apps;
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
        return ['apps' => 'apps', 'links' => 'links', 'meta' => 'meta'];
    }
}