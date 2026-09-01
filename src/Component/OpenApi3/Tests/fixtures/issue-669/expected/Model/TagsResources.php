<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class TagsResources implements AdditionalPropertiesInterface
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
    /**
     * @var TagsResourcesDroplets
     */
    public TagsResourcesDroplets $droplets;
    /**
     * @var TagsResourcesImgages
     */
    public TagsResourcesImgages $imgages;
    /**
     * @var TagsResourcesVolumes
     */
    public TagsResourcesVolumes $volumes;
    /**
     * @var TagsResourcesVolumeSnapshots
     */
    public TagsResourcesVolumeSnapshots $volumeSnapshots;
    /**
     * @var TagsResourcesDatabases
     */
    public TagsResourcesDatabases $databases;
    public function definedProperties(): array
    {
        return ['count' => 'count', 'lastTaggedUri' => 'last_tagged_uri', 'droplets' => 'droplets', 'imgages' => 'imgages', 'volumes' => 'volumes', 'volumeSnapshots' => 'volume_snapshots', 'databases' => 'databases'];
    }
}