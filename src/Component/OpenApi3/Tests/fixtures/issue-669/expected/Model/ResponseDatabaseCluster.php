<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabaseCluster implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var DatabaseClusterRead
     */
    public DatabaseClusterRead $database;
    public function definedProperties(): array
    {
        return ['database' => 'database'];
    }
}