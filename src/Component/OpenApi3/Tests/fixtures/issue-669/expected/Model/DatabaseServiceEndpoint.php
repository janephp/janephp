<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseServiceEndpoint implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A FQDN pointing to the database cluster's node(s).
     *
     * @var string
     */
    public string $host;
    /**
     * The port on which a service is listening.
     *
     * @var int
     */
    public int $port;
    public function definedProperties(): array
    {
        return ['host' => 'host', 'port' => 'port'];
    }
}