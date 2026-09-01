<?php

namespace PicturePark\API\Model;

class Schema
{
    /**
     * The schema ID. It is unique throughout the whole customer setup.
     *
     * @var string
     */
    public string $id;
    /**
     * The parent schema ID.
     *
     * @var string|null
     */
    public ?string $parentSchemaId;
    /**
     * List of schema types. Currently only one schema type can be assigned to this list, and it cannot be modified once the schema is created.
     *
     * @var list<string>|null
     */
    public ?array $types;
    /**
     * Language specific schema names.
     *
     * @var array<string, string>|null
     */
    public ?iterable $names;
    /**
     * Language specific schema descriptions.
     *
     * @var array<string, string>|null
     */
    public ?iterable $descriptions;
    /**
     * An optional list of schemas' IDs with type layer. For a Content schema it stores the layers that can be assigned to a content.
     *
     * @var list<string>|null
     */
    public ?array $layerSchemaIds;
    /**
     * The count of all fields.
     *
     * @var int
     */
    public int $fieldCount;
    /**
     * The count of all schema descendants with an immediate inheritance.
     *
     * @var int
     */
    public int $childCount;
    /**
     * The descendant depth of the schema.
     *
     * @var int
     */
    public int $level;
    /**
     * Identifies a system provided schema. A system schema cannot be created, updated or deleted.
     *
     * @var bool
     */
    public bool $system;
}