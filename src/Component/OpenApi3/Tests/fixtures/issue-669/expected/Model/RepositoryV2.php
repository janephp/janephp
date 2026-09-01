<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class RepositoryV2 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the container registry.
     *
     * @var string
     */
    public string $registryName;
    /**
     * The name of the repository.
     *
     * @var string
     */
    public string $name;
    /**
     * @var RepositoryManifest
     */
    public RepositoryManifest $latestManifest;
    /**
     * The number of tags in the repository.
     *
     * @var int
     */
    public int $tagCount;
    /**
     * The number of manifests in the repository.
     *
     * @var int
     */
    public int $manifestCount;
    public function definedProperties(): array
    {
        return ['registryName' => 'registry_name', 'name' => 'name', 'latestManifest' => 'latest_manifest', 'tagCount' => 'tag_count', 'manifestCount' => 'manifest_count'];
    }
}