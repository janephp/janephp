<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SchemaRegistryConnection implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * This is provided as a convenience and should be able to be constructed by the other attributes.
     *
     * @var string
     */
    public string $uri;
    /**
     * The FQDN pointing to the schema registry connection uri.
     *
     * @var string
     */
    public string $host;
    /**
     * The port on which the schema registry is listening.
     *
     * @var int
     */
    public int $port;
    /**
     * The default user for the schema registry.<br><br>Requires `database:view_credentials` scope.
     *
     * @var string
     */
    public string $user;
    /**
     * The randomly generated password for the schema registry.<br><br>Requires `database:view_credentials` scope.
     *
     * @var string
     */
    public string $password;
    /**
     * A boolean value indicating if the connection should be made over SSL.
     *
     * @var bool
     */
    public bool $ssl;
    public function definedProperties(): array
    {
        return ['uri' => 'uri', 'host' => 'host', 'port' => 'port', 'user' => 'user', 'password' => 'password', 'ssl' => 'ssl'];
    }
}