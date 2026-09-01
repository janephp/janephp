<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OnlineMigration implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the most recent migration.
     *
     * @var string
     */
    public string $id;
    /**
     * The current status of the migration.
     *
     * @var string
     */
    public string $status;
    /**
     * The time the migration was initiated, in ISO 8601 format.
     *
     * @var string
     */
    public string $createdAt;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'status' => 'status', 'createdAt' => 'created_at'];
    }
}