<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SourceDatabaseSource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
     * The name of the default database.
     *
     * @var string
     */
    public string $dbname;
    /**
     * The default user for the database.
     *
     * @var string
     */
    public string $username;
    /**
     * The randomly generated password for the default user.
     *
     * @var string
     */
    public string $password;
    public function definedProperties(): array
    {
        return ['host' => 'host', 'port' => 'port', 'dbname' => 'dbname', 'username' => 'username', 'password' => 'password'];
    }
}