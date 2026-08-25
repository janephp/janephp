<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2VolumesVolumeIdSnapshotsPostBody implements AdditionalPropertiesInterface
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
     * A human-readable name for the volume snapshot.
     *
     * @var string
     */
    protected $name;
    /**
     * A flat array of tag names as strings to be applied to the resource. Tag names may be for either existing or new tags. <br><br>Requires `tag:create` scope.
     *
     * @var list<string>|null
     */
    protected $tags;
    /**
     * A human-readable name for the volume snapshot.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A human-readable name for the volume snapshot.
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
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'tags' => ['tags', 'getTags', 'setTags']];
    }
}