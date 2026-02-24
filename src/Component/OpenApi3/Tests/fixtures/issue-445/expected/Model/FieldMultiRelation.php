<?php

namespace PicturePark\API\Model;

class FieldMultiRelation extends FieldBase
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
     * The ID of the schema used for relation metadata (it must be of type Struct, and it cannot be a system schema).
     *
     * @var string
     */
    protected $schemaId;
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property.
     *
     * @var mixed|null
     */
    protected $schemaIndexingInfo;
    /**
     * The relation types supported by the field.
     *
     * @var list<RelationType>
     */
    protected $relationTypes;
    /**
     * The maximum number of items that can be stored.
     *
     * @var int|null
     */
    protected $maximumItems;
    /**
     * The minimum number of items that must be stored.
     *
     * @var int|null
     */
    protected $minimumItems;
    /**
     * The ID of the schema used for relation metadata (it must be of type Struct, and it cannot be a system schema).
     *
     * @return string
     */
    public function getSchemaId(): string
    {
        return $this->schemaId;
    }
    /**
     * The ID of the schema used for relation metadata (it must be of type Struct, and it cannot be a system schema).
     *
     * @param string $schemaId
     *
     * @return self
     */
    public function setSchemaId(string $schemaId): self
    {
        $this->initialized['schemaId'] = true;
        $this->schemaId = $schemaId;
        return $this;
    }
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property.
     *
     * @return mixed
     */
    public function getSchemaIndexingInfo()
    {
        return $this->schemaIndexingInfo;
    }
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property.
     *
     * @param mixed $schemaIndexingInfo
     *
     * @return self
     */
    public function setSchemaIndexingInfo($schemaIndexingInfo): self
    {
        $this->initialized['schemaIndexingInfo'] = true;
        $this->schemaIndexingInfo = $schemaIndexingInfo;
        return $this;
    }
    /**
     * The relation types supported by the field.
     *
     * @return list<RelationType>
     */
    public function getRelationTypes(): array
    {
        return $this->relationTypes;
    }
    /**
     * The relation types supported by the field.
     *
     * @param list<RelationType> $relationTypes
     *
     * @return self
     */
    public function setRelationTypes(array $relationTypes): self
    {
        $this->initialized['relationTypes'] = true;
        $this->relationTypes = $relationTypes;
        return $this;
    }
    /**
     * The maximum number of items that can be stored.
     *
     * @return int|null
     */
    public function getMaximumItems(): ?int
    {
        return $this->maximumItems;
    }
    /**
     * The maximum number of items that can be stored.
     *
     * @param int|null $maximumItems
     *
     * @return self
     */
    public function setMaximumItems(?int $maximumItems): self
    {
        $this->initialized['maximumItems'] = true;
        $this->maximumItems = $maximumItems;
        return $this;
    }
    /**
     * The minimum number of items that must be stored.
     *
     * @return int|null
     */
    public function getMinimumItems(): ?int
    {
        return $this->minimumItems;
    }
    /**
     * The minimum number of items that must be stored.
     *
     * @param int|null $minimumItems
     *
     * @return self
     */
    public function setMinimumItems(?int $minimumItems): self
    {
        $this->initialized['minimumItems'] = true;
        $this->minimumItems = $minimumItems;
        return $this;
    }
}