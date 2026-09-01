<?php

namespace PicturePark\API\Model;

class SchemaUpdateRequest
{
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
     * Language specific DotLiquid templates. These templates will be resolved into display values in content documents and/or list items.
     *
     * @var list<DisplayPattern>|null
     */
    public ?array $displayPatterns;
    /**
     * The schema fields.
     *
     * @var list<FieldBase>|null
     */
    public ?array $fields;
    /**
     * A list of schema fields overwrite information. It is used to overwrite the field configuration coming from the parent schema.
     * Only a subset of properties of a FieldSingleTagbox and FieldMultiTagbox can be be overwritten. All other properties and fields cannot.
     *
     * @var list<FieldOverwriteBase>|null
     */
    public ?array $fieldsOverwrite;
    /**
     * An optional list of aggregations to show grouped list item documents. When aggregations are defined for a List,
     * the UI uses such information to show the available filters and grouped results.
     *
     * @var list<AggregatorBase>|null
     */
    public ?array $aggregations;
    /**
     * Sorts content documents and/or list items. In order for the sorting to work properly, the Sortable property of the related field
     * must be set to true. Multiple sorting is supported: they are applied in the specified order.
     *
     * @var list<SortInfo>|null
     */
    public ?array $sort;
    /**
     * Defines a schema as viewable by everyone. Everyone with ManageSchema user permission is able to see the schema.
     *
     * @var bool
     */
    public bool $viewForAll;
    /**
     * An optional list of schema permission set IDs which control schema permissions.
     *
     * @var list<string>|null
     */
    public ?array $schemaPermissionSetIds;
    /**
     * An optional list of schemas' IDs with type layer. For a Content schema it stores the layers that can be assigned to a content.
     *
     * @var list<string>|null
     */
    public ?array $layerSchemaIds;
    /**
     * If the schema if of type Layer, the list contains the schemas with type Content
     * that reference the layer.
     *
     * @var list<string>|null
     */
    public ?array $referencedInContentSchemaIds;
}