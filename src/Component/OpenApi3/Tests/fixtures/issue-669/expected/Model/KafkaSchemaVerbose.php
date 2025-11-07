<?php

namespace Jane\Generated\DigitalOcean\Model;

class KafkaSchemaVerbose extends \ArrayObject
{
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
}