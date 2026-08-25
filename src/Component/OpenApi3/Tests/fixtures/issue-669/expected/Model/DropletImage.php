<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletImage implements AdditionalPropertiesInterface
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
     * A unique number that can be used to identify and reference a specific image.
     *
     * @var int
     */
    protected $id;
    /**
     * The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.
     *
     * @var string
     */
    protected $name;
    /**
     * Describes the kind of image. It may be one of `base`, `snapshot`, `backup`, `custom`, or `admin`. Respectively, this specifies whether an image is a DigitalOcean base OS image, user-generated Droplet snapshot, automatically created Droplet backup, user-provided virtual machine image, or an image used for DigitalOcean managed resources (e.g. DOKS worker nodes).
     *
     * @var string
     */
    protected $type;
    /**
     * The name of a custom image's distribution. Currently, the valid values are  `Arch Linux`, `CentOS`, `CoreOS`, `Debian`, `Fedora`, `Fedora Atomic`,  `FreeBSD`, `Gentoo`, `openSUSE`, `RancherOS`, `Rocky Linux`, `Ubuntu`, and `Unknown`.  Any other value will be accepted but ignored, and `Unknown` will be used in its place.
     *
     * @var string
     */
    protected $distribution;
    /**
     * A uniquely identifying string that is associated with each of the DigitalOcean-provided public images. These can be used to reference a public image as an alternative to the numeric id.
     *
     * @var string|null
     */
    protected $slug;
    /**
     * This is a boolean value that indicates whether the image in question is public or not. An image that is public is available to all accounts. A non-public image is only accessible from your account.
     *
     * @var bool
     */
    protected $public;
    /**
     * This attribute is an array of the regions that the image is available in. The regions are represented by their identifying slug values.
     *
     * @var list<string>
     */
    protected $regions;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the image was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The minimum disk size in GB required for a Droplet to use this image.
     *
     * @var int|null
     */
    protected $minDiskSize;
    /**
     * The size of the image in gigabytes.
     *
     * @var float|null
     */
    protected $sizeGigabytes;
    /**
     * An optional free-form text field to describe an image.
     *
     * @var string
     */
    protected $description;
    /**
     * A flat array of tag names as strings to be applied to the resource. Tag names may be for either existing or new tags. <br><br>Requires `tag:create` scope.
     *
     * @var list<string>|null
     */
    protected $tags;
    /**
     * A status string indicating the state of a custom image. This may be `NEW`,
     *  `available`, `pending`, `deleted`, or `retired`.
     *
     * @var string
     */
    protected $status;
    /**
     * A string containing information about errors that may occur when importing
     *  a custom image.
     *
     * @var string
     */
    protected $errorMessage;
    /**
     * A unique number that can be used to identify and reference a specific image.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * A unique number that can be used to identify and reference a specific image.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Describes the kind of image. It may be one of `base`, `snapshot`, `backup`, `custom`, or `admin`. Respectively, this specifies whether an image is a DigitalOcean base OS image, user-generated Droplet snapshot, automatically created Droplet backup, user-provided virtual machine image, or an image used for DigitalOcean managed resources (e.g. DOKS worker nodes).
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Describes the kind of image. It may be one of `base`, `snapshot`, `backup`, `custom`, or `admin`. Respectively, this specifies whether an image is a DigitalOcean base OS image, user-generated Droplet snapshot, automatically created Droplet backup, user-provided virtual machine image, or an image used for DigitalOcean managed resources (e.g. DOKS worker nodes).
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The name of a custom image's distribution. Currently, the valid values are  `Arch Linux`, `CentOS`, `CoreOS`, `Debian`, `Fedora`, `Fedora Atomic`,  `FreeBSD`, `Gentoo`, `openSUSE`, `RancherOS`, `Rocky Linux`, `Ubuntu`, and `Unknown`.  Any other value will be accepted but ignored, and `Unknown` will be used in its place.
     *
     * @return string
     */
    public function getDistribution(): string
    {
        return $this->distribution;
    }
    /**
     * The name of a custom image's distribution. Currently, the valid values are  `Arch Linux`, `CentOS`, `CoreOS`, `Debian`, `Fedora`, `Fedora Atomic`,  `FreeBSD`, `Gentoo`, `openSUSE`, `RancherOS`, `Rocky Linux`, `Ubuntu`, and `Unknown`.  Any other value will be accepted but ignored, and `Unknown` will be used in its place.
     *
     * @param string $distribution
     *
     * @return self
     */
    public function setDistribution(string $distribution): self
    {
        $this->initialized['distribution'] = true;
        $this->distribution = $distribution;
        return $this;
    }
    /**
     * A uniquely identifying string that is associated with each of the DigitalOcean-provided public images. These can be used to reference a public image as an alternative to the numeric id.
     *
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }
    /**
     * A uniquely identifying string that is associated with each of the DigitalOcean-provided public images. These can be used to reference a public image as an alternative to the numeric id.
     *
     * @param string|null $slug
     *
     * @return self
     */
    public function setSlug(?string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;
        return $this;
    }
    /**
     * This is a boolean value that indicates whether the image in question is public or not. An image that is public is available to all accounts. A non-public image is only accessible from your account.
     *
     * @return bool
     */
    public function getPublic(): bool
    {
        return $this->public;
    }
    /**
     * This is a boolean value that indicates whether the image in question is public or not. An image that is public is available to all accounts. A non-public image is only accessible from your account.
     *
     * @param bool $public
     *
     * @return self
     */
    public function setPublic(bool $public): self
    {
        $this->initialized['public'] = true;
        $this->public = $public;
        return $this;
    }
    /**
     * This attribute is an array of the regions that the image is available in. The regions are represented by their identifying slug values.
     *
     * @return list<string>
     */
    public function getRegions(): array
    {
        return $this->regions;
    }
    /**
     * This attribute is an array of the regions that the image is available in. The regions are represented by their identifying slug values.
     *
     * @param list<string> $regions
     *
     * @return self
     */
    public function setRegions(array $regions): self
    {
        $this->initialized['regions'] = true;
        $this->regions = $regions;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the image was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the image was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The minimum disk size in GB required for a Droplet to use this image.
     *
     * @return int|null
     */
    public function getMinDiskSize(): ?int
    {
        return $this->minDiskSize;
    }
    /**
     * The minimum disk size in GB required for a Droplet to use this image.
     *
     * @param int|null $minDiskSize
     *
     * @return self
     */
    public function setMinDiskSize(?int $minDiskSize): self
    {
        $this->initialized['minDiskSize'] = true;
        $this->minDiskSize = $minDiskSize;
        return $this;
    }
    /**
     * The size of the image in gigabytes.
     *
     * @return float|null
     */
    public function getSizeGigabytes(): ?float
    {
        return $this->sizeGigabytes;
    }
    /**
     * The size of the image in gigabytes.
     *
     * @param float|null $sizeGigabytes
     *
     * @return self
     */
    public function setSizeGigabytes(?float $sizeGigabytes): self
    {
        $this->initialized['sizeGigabytes'] = true;
        $this->sizeGigabytes = $sizeGigabytes;
        return $this;
    }
    /**
     * An optional free-form text field to describe an image.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * An optional free-form text field to describe an image.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * A flat array of tag names as strings to be applied to the resource. Tag names may be for either existing or new tags. <br><br>Requires `tag:create` scope.
     *
     * @return list<string>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }
    /**
     * A flat array of tag names as strings to be applied to the resource. Tag names may be for either existing or new tags. <br><br>Requires `tag:create` scope.
     *
     * @param list<string>|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * A status string indicating the state of a custom image. This may be `NEW`,
     *  `available`, `pending`, `deleted`, or `retired`.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
    * A status string indicating the state of a custom image. This may be `NEW`,
    `available`, `pending`, `deleted`, or `retired`.
    *
    * @param string $status
    *
    * @return self
    */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * A string containing information about errors that may occur when importing
     *  a custom image.
     *
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
    /**
    * A string containing information about errors that may occur when importing
    a custom image.
    *
    * @param string $errorMessage
    *
    * @return self
    */
    public function setErrorMessage(string $errorMessage): self
    {
        $this->initialized['errorMessage'] = true;
        $this->errorMessage = $errorMessage;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'type' => ['type', 'getType', 'setType'], 'distribution' => ['distribution', 'getDistribution', 'setDistribution'], 'slug' => ['slug', 'getSlug', 'setSlug'], 'public' => ['public', 'getPublic', 'setPublic'], 'regions' => ['regions', 'getRegions', 'setRegions'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'minDiskSize' => ['min_disk_size', 'getMinDiskSize', 'setMinDiskSize'], 'sizeGigabytes' => ['size_gigabytes', 'getSizeGigabytes', 'setSizeGigabytes'], 'description' => ['description', 'getDescription', 'setDescription'], 'tags' => ['tags', 'getTags', 'setTags'], 'status' => ['status', 'getStatus', 'setStatus'], 'errorMessage' => ['error_message', 'getErrorMessage', 'setErrorMessage']];
    }
}