<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OptionsOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var OptionsOptionsKafka
     */
    public OptionsOptionsKafka $kafka;
    /**
     * @var OptionsOptionsMongodb
     */
    public OptionsOptionsMongodb $mongodb;
    /**
     * @var OptionsOptionsPg
     */
    public OptionsOptionsPg $pg;
    /**
     * @var OptionsOptionsMysql
     */
    public OptionsOptionsMysql $mysql;
    /**
     * @var OptionsOptionsRedis
     */
    public OptionsOptionsRedis $redis;
    /**
     * @var OptionsOptionsValkey
     */
    public OptionsOptionsValkey $valkey;
    /**
     * @var OptionsOptionsOpensearch
     */
    public OptionsOptionsOpensearch $opensearch;
    public function definedProperties(): array
    {
        return ['kafka' => 'kafka', 'mongodb' => 'mongodb', 'pg' => 'pg', 'mysql' => 'mysql', 'redis' => 'redis', 'valkey' => 'valkey', 'opensearch' => 'opensearch'];
    }
}