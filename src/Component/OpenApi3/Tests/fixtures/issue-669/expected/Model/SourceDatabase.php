<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SourceDatabase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var SourceDatabaseSource
     */
    public SourceDatabaseSource $source;
    /**
     * Enables SSL encryption when connecting to the source database.
     *
     * @var bool
     */
    public bool $disableSsl;
    /**
     * List of databases that should be ignored during migration.
     *
     * @var list<string>
     */
    public array $ignoreDbs = array();
    public function definedProperties(): array
    {
        return ['source' => 'source', 'disableSsl' => 'disable_ssl', 'ignoreDbs' => 'ignore_dbs'];
    }
}