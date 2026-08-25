<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Repository implements AdditionalPropertiesInterface
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
     * The name of the container registry.
     *
     * @var string
     */
    protected $registryName;
    /**
     * The name of the repository.
     *
     * @var string
     */
    protected $name;
    /**
     * @var RepositoryTag
     */
    protected $latestTag;
    /**
     * The number of tags in the repository.
     *
     * @var int
     */
    protected $tagCount;
    /**
     * The name of the container registry.
     *
     * @return string
     */
    public function getRegistryName(): string
    {
        return $this->registryName;
    }
    /**
     * The name of the container registry.
     *
     * @param string $registryName
     *
     * @return self
     */
    public function setRegistryName(string $registryName): self
    {
        $this->initialized['registryName'] = true;
        $this->registryName = $registryName;
        return $this;
    }
    /**
     * The name of the repository.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the repository.
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
     * @return RepositoryTag
     */
    public function getLatestTag(): RepositoryTag
    {
        return $this->latestTag;
    }
    /**
     * @param RepositoryTag $latestTag
     *
     * @return self
     */
    public function setLatestTag(RepositoryTag $latestTag): self
    {
        $this->initialized['latestTag'] = true;
        $this->latestTag = $latestTag;
        return $this;
    }
    /**
     * The number of tags in the repository.
     *
     * @return int
     */
    public function getTagCount(): int
    {
        return $this->tagCount;
    }
    /**
     * The number of tags in the repository.
     *
     * @param int $tagCount
     *
     * @return self
     */
    public function setTagCount(int $tagCount): self
    {
        $this->initialized['tagCount'] = true;
        $this->tagCount = $tagCount;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['registryName' => ['registry_name', 'getRegistryName', 'setRegistryName'], 'name' => ['name', 'getName', 'setName'], 'latestTag' => ['latest_tag', 'getLatestTag', 'setLatestTag'], 'tagCount' => ['tag_count', 'getTagCount', 'setTagCount']];
    }
}