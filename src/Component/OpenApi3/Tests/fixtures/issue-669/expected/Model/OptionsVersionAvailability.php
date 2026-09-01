<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OptionsVersionAvailability implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @var list<DatabaseVersionAvailability>
     */
    public array $kafka;
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @var list<DatabaseVersionAvailability>
     */
    public array $pg;
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @var list<DatabaseVersionAvailability>
     */
    public array $mysql;
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @var list<DatabaseVersionAvailability>
     */
    public array $redis;
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @var list<DatabaseVersionAvailability>
     */
    public array $valkey;
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @var list<DatabaseVersionAvailability>
     */
    public array $mongodb;
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @var list<DatabaseVersionAvailability>
     */
    public array $opensearch;
    public function definedProperties(): array
    {
        return ['kafka' => 'kafka', 'pg' => 'pg', 'mysql' => 'mysql', 'redis' => 'redis', 'valkey' => 'valkey', 'mongodb' => 'mongodb', 'opensearch' => 'opensearch'];
    }
}