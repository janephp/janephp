<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseReplicaPrivateConnection implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A connection string in the format accepted by the `psql` command. This is provided as a convenience and should be able to be constructed by the other attributes.
     *
     * @var string
     */
    public string $uri;
    /**
     * The name of the default database.
     *
     * @var string
     */
    public string $database;
    /**
     * The FQDN pointing to the database cluster's current primary node.
     *
     * @var string
     */
    public string $host;
    /**
     * The port on which the database cluster is listening.
     *
     * @var int
     */
    public int $port;
    /**
     * The default user for the database.<br><br>Requires `database:view_credentials` scope.
     *
     * @var string
     */
    public string $user;
    /**
     * The randomly generated password for the default user.<br><br>Requires `database:view_credentials` scope.
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
        return ['uri' => 'uri', 'database' => 'database', 'host' => 'host', 'port' => 'port', 'user' => 'user', 'password' => 'password', 'ssl' => 'ssl'];
    }
}