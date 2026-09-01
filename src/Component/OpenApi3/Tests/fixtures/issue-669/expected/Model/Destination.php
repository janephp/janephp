<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Destination implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique identifier for a destination.
     *
     * @var string
     */
    public string $id;
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
     * @var OpensearchConfig
     */
    public OpensearchConfig $config;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'type' => 'type', 'config' => 'config'];
    }
}