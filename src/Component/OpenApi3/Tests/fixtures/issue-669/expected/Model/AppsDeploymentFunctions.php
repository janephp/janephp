<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsDeploymentFunctions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * The commit hash of the repository that was used to build this functions component.
     *
     * @var string
     */
    public string $sourceCommitHash;
    /**
     * The namespace where the functions are deployed.
     *
     * @var string
     */
    public string $namespace;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'sourceCommitHash' => 'source_commit_hash', 'namespace' => 'namespace'];
    }
}