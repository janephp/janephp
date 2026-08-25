<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseTagsNew implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A tag is a label that can be applied to a resource (currently Droplets, Images, Volumes, Volume Snapshots, and Database clusters) in order to better organize or facilitate the lookups and actions on it.
     * Tags have two attributes: a user defined `name` attribute and an embedded `resources` attribute with information about resources that have been tagged.
     *
     * @var Tags
     */
    protected $tag;
    /**
     * A tag is a label that can be applied to a resource (currently Droplets, Images, Volumes, Volume Snapshots, and Database clusters) in order to better organize or facilitate the lookups and actions on it.
     * Tags have two attributes: a user defined `name` attribute and an embedded `resources` attribute with information about resources that have been tagged.
     *
     * @return Tags
     */
    public function getTag(): Tags
    {
        return $this->tag;
    }
    /**
    * A tag is a label that can be applied to a resource (currently Droplets, Images, Volumes, Volume Snapshots, and Database clusters) in order to better organize or facilitate the lookups and actions on it.
    Tags have two attributes: a user defined `name` attribute and an embedded `resources` attribute with information about resources that have been tagged.
    *
    * @param Tags $tag
    *
    * @return self
    */
    public function setTag(Tags $tag): self
    {
        $this->initialized['tag'] = true;
        $this->tag = $tag;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['tag' => ['tag', 'getTag', 'setTag']];
    }
}