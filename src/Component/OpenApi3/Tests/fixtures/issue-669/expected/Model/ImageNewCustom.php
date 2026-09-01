<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ImageNewCustom implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.
     *
     * @var string
     */
    public string $name;
    /**
     * The name of a custom image's distribution. Currently, the valid values are  `Arch Linux`, `CentOS`, `CoreOS`, `Debian`, `Fedora`, `Fedora Atomic`,  `FreeBSD`, `Gentoo`, `openSUSE`, `RancherOS`, `Rocky Linux`, `Ubuntu`, and `Unknown`.  Any other value will be accepted but ignored, and `Unknown` will be used in its place.
     *
     * @var string
     */
    public string $distribution;
    /**
     * An optional free-form text field to describe an image.
     *
     * @var string
     */
    public string $description;
    /**
     * A URL from which the custom Linux virtual machine image may be retrieved.  The image it points to must be in the raw, qcow2, vhdx, vdi, or vmdk format.  It may be compressed using gzip or bzip2 and must be smaller than 100 GB after being decompressed.
     *
     * @var string
     */
    public string $url;
    /**
     * The slug identifier for the region where the resource will initially be available.
     *
     * @var string
     */
    public string $region;
    /**
     * A flat array of tag names as strings to be applied to the resource. Tag names may be for either existing or new tags. <br><br>Requires `tag:create` scope.
     *
     * @var list<string>|null
     */
    public ?array $tags;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'distribution' => 'distribution', 'description' => 'description', 'url' => 'url', 'region' => 'region', 'tags' => 'tags'];
    }
}