<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseKafkaSchemaVersion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The id for schema.
     *
     * @var int
     */
    protected $schemaId;
    /**
     * The version of the schema.
     *
     * @var string
     */
    protected $version;
    /**
     * The name of the schema subject.
     *
     * @var string
     */
    protected $subjectName;
    /**
     * The type of the schema.
     *
     * @var string
     */
    protected $schemaType;
    /**
     * The schema definition in the specified format.
     *
     * @var string
     */
    protected $schema;
    /**
     * The id for schema.
     *
     * @return int
     */
    public function getSchemaId(): int
    {
        return $this->schemaId;
    }
    /**
     * The id for schema.
     *
     * @param int $schemaId
     *
     * @return self
     */
    public function setSchemaId(int $schemaId): self
    {
        $this->initialized['schemaId'] = true;
        $this->schemaId = $schemaId;
        return $this;
    }
    /**
     * The version of the schema.
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * The version of the schema.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * The name of the schema subject.
     *
     * @return string
     */
    public function getSubjectName(): string
    {
        return $this->subjectName;
    }
    /**
     * The name of the schema subject.
     *
     * @param string $subjectName
     *
     * @return self
     */
    public function setSubjectName(string $subjectName): self
    {
        $this->initialized['subjectName'] = true;
        $this->subjectName = $subjectName;
        return $this;
    }
    /**
     * The type of the schema.
     *
     * @return string
     */
    public function getSchemaType(): string
    {
        return $this->schemaType;
    }
    /**
     * The type of the schema.
     *
     * @param string $schemaType
     *
     * @return self
     */
    public function setSchemaType(string $schemaType): self
    {
        $this->initialized['schemaType'] = true;
        $this->schemaType = $schemaType;
        return $this;
    }
    /**
     * The schema definition in the specified format.
     *
     * @return string
     */
    public function getSchema(): string
    {
        return $this->schema;
    }
    /**
     * The schema definition in the specified format.
     *
     * @param string $schema
     *
     * @return self
     */
    public function setSchema(string $schema): self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['schemaId' => ['schema_id', 'getSchemaId', 'setSchemaId'], 'version' => ['version', 'getVersion', 'setVersion'], 'subjectName' => ['subject_name', 'getSubjectName', 'setSubjectName'], 'schemaType' => ['schema_type', 'getSchemaType', 'setSchemaType'], 'schema' => ['schema', 'getSchema', 'setSchema']];
    }
}