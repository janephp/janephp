<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiRollbackToAgentVersionInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Agent unique identifier
     *
     * @var string
     */
    public string $uuid;
    /**
     * Unique identifier
     *
     * @var string
     */
    public string $versionHash;
    public function definedProperties(): array
    {
        return ['uuid' => 'uuid', 'versionHash' => 'version_hash'];
    }
}