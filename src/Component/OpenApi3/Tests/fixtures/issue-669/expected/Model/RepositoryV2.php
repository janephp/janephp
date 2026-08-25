<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class RepositoryV2 implements AdditionalPropertiesInterface
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
     * @var RepositoryManifest
     */
    protected $latestManifest;
    /**
     * The number of tags in the repository.
     *
     * @var int
     */
    protected $tagCount;
    /**
     * The number of manifests in the repository.
     *
     * @var int
     */
    protected $manifestCount;
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
     * @return RepositoryManifest
     */
    public function getLatestManifest(): RepositoryManifest
    {
        return $this->latestManifest;
    }
    /**
     * @param RepositoryManifest $latestManifest
     *
     * @return self
     */
    public function setLatestManifest(RepositoryManifest $latestManifest): self
    {
        $this->initialized['latestManifest'] = true;
        $this->latestManifest = $latestManifest;
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
    /**
     * The number of manifests in the repository.
     *
     * @return int
     */
    public function getManifestCount(): int
    {
        return $this->manifestCount;
    }
    /**
     * The number of manifests in the repository.
     *
     * @param int $manifestCount
     *
     * @return self
     */
    public function setManifestCount(int $manifestCount): self
    {
        $this->initialized['manifestCount'] = true;
        $this->manifestCount = $manifestCount;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['registryName' => ['registry_name', 'getRegistryName', 'setRegistryName'], 'name' => ['name', 'getName', 'setName'], 'latestManifest' => ['latest_manifest', 'getLatestManifest', 'setLatestManifest'], 'tagCount' => ['tag_count', 'getTagCount', 'setTagCount'], 'manifestCount' => ['manifest_count', 'getManifestCount', 'setManifestCount']];
    }
}