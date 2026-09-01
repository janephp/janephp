<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2KubernetesClustersClusterIdUpgradePostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The slug identifier for the version of Kubernetes that the cluster will be upgraded to.
     *
     * @var string
     */
    public string $version;
    public function definedProperties(): array
    {
        return ['version' => 'version'];
    }
}