<?php

namespace PicturePark\API\Model;

class Schema
{
    /**
     * The schema ID. It is unique throughout the whole customer setup.
     *
     * @var string
     */
    protected $id;
    /**
     * The parent schema ID.
     *
     * @var string|null
     */
    protected $parentSchemaId;
    /**
     * List of schema types. Currently only one schema type can be assigned to this list, and it cannot be modified once the schema is created.
     *
     * @var string[]|null
     */
    protected $types;
    /**
     * Language specific schema names.
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * Language specific schema descriptions.
     *
     * @var mixed|null
     */
    protected $descriptions;
    /**
     * An optional list of schemas' IDs with type layer. For a Content schema it stores the layers that can be assigned to a content.
     *
     * @var string[]|null
     */
    protected $layerSchemaIds;
    /**
     * The count of all fields.
     *
     * @var int
     */
    protected $fieldCount;
    /**
     * The count of all schema descendants with an immediate inheritance.
     *
     * @var int
     */
    protected $childCount;
    /**
     * The descendant depth of the schema.
     *
     * @var int
     */
    protected $level;
    /**
     * Identifies a system provided schema. A system schema cannot be created, updated or deleted.
     *
     * @var bool
     */
    protected $system;
    /**
     * The schema ID. It is unique throughout the whole customer setup.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The schema ID. It is unique throughout the whole customer setup.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The parent schema ID.
     *
     * @return string|null
     */
    public function getParentSchemaId() : ?string
    {
        return $this->parentSchemaId;
    }
    /**
     * The parent schema ID.
     *
     * @param string|null $parentSchemaId
     *
     * @return self
     */
    public function setParentSchemaId(?string $parentSchemaId) : self
    {
        $this->parentSchemaId = $parentSchemaId;
        return $this;
    }
    /**
     * List of schema types. Currently only one schema type can be assigned to this list, and it cannot be modified once the schema is created.
     *
     * @return string[]|null
     */
    public function getTypes() : ?array
    {
        return $this->types;
    }
    /**
     * List of schema types. Currently only one schema type can be assigned to this list, and it cannot be modified once the schema is created.
     *
     * @param string[]|null $types
     *
     * @return self
     */
    public function setTypes(?array $types) : self
    {
        $this->types = $types;
        return $this;
    }
    /**
     * Language specific schema names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific schema names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * Language specific schema descriptions.
     *
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }
    /**
     * Language specific schema descriptions.
     *
     * @param mixed $descriptions
     *
     * @return self
     */
    public function setDescriptions($descriptions) : self
    {
        $this->descriptions = $descriptions;
        return $this;
    }
    /**
     * An optional list of schemas' IDs with type layer. For a Content schema it stores the layers that can be assigned to a content.
     *
     * @return string[]|null
     */
    public function getLayerSchemaIds() : ?array
    {
        return $this->layerSchemaIds;
    }
    /**
     * An optional list of schemas' IDs with type layer. For a Content schema it stores the layers that can be assigned to a content.
     *
     * @param string[]|null $layerSchemaIds
     *
     * @return self
     */
    public function setLayerSchemaIds(?array $layerSchemaIds) : self
    {
        $this->layerSchemaIds = $layerSchemaIds;
        return $this;
    }
    /**
     * The count of all fields.
     *
     * @return int
     */
    public function getFieldCount() : int
    {
        return $this->fieldCount;
    }
    /**
     * The count of all fields.
     *
     * @param int $fieldCount
     *
     * @return self
     */
    public function setFieldCount(int $fieldCount) : self
    {
        $this->fieldCount = $fieldCount;
        return $this;
    }
    /**
     * The count of all schema descendants with an immediate inheritance.
     *
     * @return int
     */
    public function getChildCount() : int
    {
        return $this->childCount;
    }
    /**
     * The count of all schema descendants with an immediate inheritance.
     *
     * @param int $childCount
     *
     * @return self
     */
    public function setChildCount(int $childCount) : self
    {
        $this->childCount = $childCount;
        return $this;
    }
    /**
     * The descendant depth of the schema.
     *
     * @return int
     */
    public function getLevel() : int
    {
        return $this->level;
    }
    /**
     * The descendant depth of the schema.
     *
     * @param int $level
     *
     * @return self
     */
    public function setLevel(int $level) : self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * Identifies a system provided schema. A system schema cannot be created, updated or deleted.
     *
     * @return bool
     */
    public function getSystem() : bool
    {
        return $this->system;
    }
    /**
     * Identifies a system provided schema. A system schema cannot be created, updated or deleted.
     *
     * @param bool $system
     *
     * @return self
     */
    public function setSystem(bool $system) : self
    {
        $this->system = $system;
        return $this;
    }
}