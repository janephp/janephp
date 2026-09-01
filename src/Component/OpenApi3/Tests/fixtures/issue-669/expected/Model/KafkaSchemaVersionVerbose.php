<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KafkaSchemaVersionVerbose implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The id for schema.
     *
     * @var int
     */
    public int $schemaId;
    /**
     * The version of the schema.
     *
     * @var string
     */
    public string $version;
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
        return ['schemaId' => 'schema_id', 'version' => 'version', 'subjectName' => 'subject_name', 'schemaType' => 'schema_type', 'schema' => 'schema'];
    }
}