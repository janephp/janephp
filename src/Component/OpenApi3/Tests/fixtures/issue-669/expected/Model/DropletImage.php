<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletImage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique number that can be used to identify and reference a specific image.
     *
     * @var int
     */
    public int $id;
    /**
     * The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.
     *
     * @var string
     */
    public string $name;
    /**
     * Describes the kind of image. It may be one of `base`, `snapshot`, `backup`, `custom`, or `admin`. Respectively, this specifies whether an image is a DigitalOcean base OS image, user-generated Droplet snapshot, automatically created Droplet backup, user-provided virtual machine image, or an image used for DigitalOcean managed resources (e.g. DOKS worker nodes).
     *
     * @var string
     */
    public string $type;
    /**
     * The name of a custom image's distribution. Currently, the valid values are  `Arch Linux`, `CentOS`, `CoreOS`, `Debian`, `Fedora`, `Fedora Atomic`,  `FreeBSD`, `Gentoo`, `openSUSE`, `RancherOS`, `Rocky Linux`, `Ubuntu`, and `Unknown`.  Any other value will be accepted but ignored, and `Unknown` will be used in its place.
     *
     * @var string
     */
    public string $distribution;
    /**
     * A uniquely identifying string that is associated with each of the DigitalOcean-provided public images. These can be used to reference a public image as an alternative to the numeric id.
     *
     * @var string|null
     */
    public ?string $slug;
    /**
     * This is a boolean value that indicates whether the image in question is public or not. An image that is public is available to all accounts. A non-public image is only accessible from your account.
     *
     * @var bool
     */
    public bool $public;
    /**
     * This attribute is an array of the regions that the image is available in. The regions are represented by their identifying slug values.
     *
     * @var list<string>
     */
    public array $regions;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the image was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * The minimum disk size in GB required for a Droplet to use this image.
     *
     * @var int|null
     */
    public ?int $minDiskSize;
    /**
     * The size of the image in gigabytes.
     *
     * @var float|null
     */
    public ?float $sizeGigabytes;
    /**
     * An optional free-form text field to describe an image.
     *
     * @var string
     */
    public string $description;
    /**
     * A flat array of tag names as strings to be applied to the resource. Tag names may be for either existing or new tags. <br><br>Requires `tag:create` scope.
     *
     * @var list<string>|null
     */
    public ?array $tags;
    /**
     * A status string indicating the state of a custom image. This may be `NEW`,
     *  `available`, `pending`, `deleted`, or `retired`.
     *
     * @var string
     */
    public string $status;
    /**
     * A string containing information about errors that may occur when importing
     *  a custom image.
     *
     * @var string
     */
    public string $errorMessage;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'type' => 'type', 'distribution' => 'distribution', 'slug' => 'slug', 'public' => 'public', 'regions' => 'regions', 'createdAt' => 'created_at', 'minDiskSize' => 'min_disk_size', 'sizeGigabytes' => 'size_gigabytes', 'description' => 'description', 'tags' => 'tags', 'status' => 'status', 'errorMessage' => 'error_message'];
    }
}