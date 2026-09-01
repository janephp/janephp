<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ConnectionPoolUpdate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The PGBouncer transaction mode for the connection pool. The allowed values are session, transaction, and statement.
     *
     * @var string
     */
    public string $mode;
    /**
     * The desired size of the PGBouncer connection pool. The maximum allowed size is determined by the size of the cluster's primary node. 25 backend server connections are allowed for every 1GB of RAM. Three are reserved for maintenance. For example, a primary node with 1 GB of RAM allows for a maximum of 22 backend server connections while one with 4 GB would allow for 97. Note that these are shared across all connection pools in a cluster.
     *
     * @var int
     */
    public int $size;
    /**
     * The database for use with the connection pool.
     *
     * @var string
     */
    public string $db;
    /**
     * The name of the user for use with the connection pool. When excluded, all sessions connect to the database as the inbound user.
     *
     * @var string
     */
    public string $user;
    public function definedProperties(): array
    {
        return ['mode' => 'mode', 'size' => 'size', 'db' => 'db', 'user' => 'user'];
    }
}