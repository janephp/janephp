<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Repository implements AdditionalPropertiesInterface
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
     * @var RepositoryTag
     */
    public RepositoryTag $latestTag;
    /**
     * The number of tags in the repository.
     *
     * @var int
     */
    public int $tagCount;
    public function definedProperties(): array
    {
        return ['registryName' => 'registry_name', 'name' => 'name', 'latestTag' => 'latest_tag', 'tagCount' => 'tag_count'];
    }
}