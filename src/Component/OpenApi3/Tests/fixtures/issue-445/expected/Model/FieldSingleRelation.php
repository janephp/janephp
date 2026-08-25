<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FieldSingleRelation extends FieldBase implements AdditionalPropertiesInterface
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
     * The ID of the schema used for relation metadata (it must be of type Struct, and it cannot be a system schema).
     *
     * @var string
     */
    protected $schemaId;
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property.
     *
     * @var SchemaIndexingInfo|null
     */
    protected $schemaIndexingInfo;
    /**
     * Defines the allowed elation types.
     *
     * @var list<RelationType>
     */
    protected $relationTypes;
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
     * @return SchemaIndexingInfo|null
     */
    public function getSchemaIndexingInfo(): ?SchemaIndexingInfo
    {
        return $this->schemaIndexingInfo;
    }
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property.
     *
     * @param SchemaIndexingInfo|null $schemaIndexingInfo
     *
     * @return self
     */
    public function setSchemaIndexingInfo(?SchemaIndexingInfo $schemaIndexingInfo): self
    {
        $this->initialized['schemaIndexingInfo'] = true;
        $this->schemaIndexingInfo = $schemaIndexingInfo;
        return $this;
    }
    /**
     * Defines the allowed elation types.
     *
     * @return list<RelationType>
     */
    public function getRelationTypes(): array
    {
        return $this->relationTypes;
    }
    /**
     * Defines the allowed elation types.
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
    public function definedProperties(): array
    {
        return ['schemaId' => ['schemaId', 'getSchemaId', 'setSchemaId'], 'schemaIndexingInfo' => ['schemaIndexingInfo', 'getSchemaIndexingInfo', 'setSchemaIndexingInfo'], 'relationTypes' => ['relationTypes', 'getRelationTypes', 'setRelationTypes']];
    }
}