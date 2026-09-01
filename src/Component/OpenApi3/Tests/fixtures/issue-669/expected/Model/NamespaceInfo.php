<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NamespaceInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The namespace's API hostname. Each function in a namespace is provided an endpoint at the namespace's hostname.
     *
     * @var string
     */
    public string $apiHost;
    /**
     * A unique string format of UUID with a prefix fn-.
     *
     * @var string
     */
    public string $namespace;
    /**
     * UTC time string.
     *
     * @var string
     */
    public string $createdAt;
    /**
     * UTC time string.
     *
     * @var string
     */
    public string $updatedAt;
    /**
     * The namespace's unique name.
     *
     * @var string
     */
    public string $label;
    /**
     * The namespace's datacenter region.
     *
     * @var string
     */
    public string $region;
    /**
     * The namespace's Universally Unique Identifier.
     *
     * @var string
     */
    public string $uuid;
    /**
     * A random alpha numeric string. This key is used in conjunction with the namespace's UUID to authenticate
     * a user to use the namespace via `doctl`, DigitalOcean's official CLI.
     *
     * @var string
     */
    public string $key;
    public function definedProperties(): array
    {
        return ['apiHost' => 'api_host', 'namespace' => 'namespace', 'createdAt' => 'created_at', 'updatedAt' => 'updated_at', 'label' => 'label', 'region' => 'region', 'uuid' => 'uuid', 'key' => 'key'];
    }
}