<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class TagsResourcesVolumeSnapshots implements AdditionalPropertiesInterface
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
     * The number of tagged objects for this type of resource.
     *
     * @var int
     */
    protected $count;
    /**
     * The URI for the last tagged object for this type of resource.
     *
     * @var string
     */
    protected $lastTaggedUri;
    /**
     * The number of tagged objects for this type of resource.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * The number of tagged objects for this type of resource.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * The URI for the last tagged object for this type of resource.
     *
     * @return string
     */
    public function getLastTaggedUri(): string
    {
        return $this->lastTaggedUri;
    }
    /**
     * The URI for the last tagged object for this type of resource.
     *
     * @param string $lastTaggedUri
     *
     * @return self
     */
    public function setLastTaggedUri(string $lastTaggedUri): self
    {
        $this->initialized['lastTaggedUri'] = true;
        $this->lastTaggedUri = $lastTaggedUri;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['count' => ['count', 'getCount', 'setCount'], 'lastTaggedUri' => ['last_tagged_uri', 'getLastTaggedUri', 'setLastTaggedUri']];
    }
}