<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseTagsNew implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A tag is a label that can be applied to a resource (currently Droplets, Images, Volumes, Volume Snapshots, and Database clusters) in order to better organize or facilitate the lookups and actions on it.
     * Tags have two attributes: a user defined `name` attribute and an embedded `resources` attribute with information about resources that have been tagged.
     *
     * @var Tags
     */
    public Tags $tag;
    public function definedProperties(): array
    {
        return ['tag' => 'tag'];
    }
}