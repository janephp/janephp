<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class TagsResourcesVolumes implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The number of tagged objects for this type of resource.
     *
     * @var int
     */
    public int $count;
    /**
     * The URI for the last tagged object for this type of resource.
     *
     * @var string
     */
    public string $lastTaggedUri;
    public function definedProperties(): array
    {
        return ['count' => 'count', 'lastTaggedUri' => 'last_tagged_uri'];
    }
}