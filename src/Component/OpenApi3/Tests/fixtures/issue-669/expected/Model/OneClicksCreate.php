<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OneClicksCreate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array of 1-Click Application slugs to be installed to the Kubernetes cluster.
     *
     * @var list<string>
     */
    public array $addonSlugs = array();
    /**
     * A unique ID for the Kubernetes cluster to which the 1-Click Applications will be installed.
     *
     * @var string
     */
    public string $clusterUuid;
    public function definedProperties(): array
    {
        return ['addonSlugs' => 'addon_slugs', 'clusterUuid' => 'cluster_uuid'];
    }
}