<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DestinationRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * destination name
     *
     * @var string
     */
    public string $name;
    /**
     * The destination type. `opensearch_dbaas` for a DigitalOcean managed OpenSearch
     * cluster or `opensearch_ext` for an externally managed one.
     * 
     *
     * @var string
     */
    public string $type;
    /**
     * @var OpensearchConfigRequest
     */
    public OpensearchConfigRequest $config;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'type' => 'type', 'config' => 'config'];
    }
}