<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2DatabasesDatabaseClusterUuidSchemaRegistryPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the schema subject.
     *
     * @var string
     */
    public string $subjectName;
    /**
     * The type of the schema.
     *
     * @var string
     */
    public string $schemaType;
    /**
     * The schema definition in the specified format.
     *
     * @var string
     */
    public string $schema;
    public function definedProperties(): array
    {
        return ['subjectName' => 'subject_name', 'schemaType' => 'schema_type', 'schema' => 'schema'];
    }
}