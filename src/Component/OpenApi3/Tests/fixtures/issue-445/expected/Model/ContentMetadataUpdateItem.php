<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentMetadataUpdateItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An optional list of IDs of the schemas that should be updated/replaced based on the options below and Metadata provided.
     * The SchemaType of the specified schemas must be Layer.
     *
     * @var list<string>|null
     */
    public ?array $layerSchemaIds;
    /**
     * The content data of the content. It's an object of dynamic metadata whose structure is defined in the Content schema identified by
     * the ContentSchemaId property. Updating the Content property is only possible for virtual items (contents
     * whose ContentType is Virtual).
     * Update of content data will be done only if this attribute has any data, i.e. if it's not null or empty.
     *
     * @var array<string, mixed>|null
     */
    public ?iterable $content;
    /**
     * The dynamic data structure matching the field schematics of the schemas with type layer (LayerSchemaIds).
     * The metadata belonging to the layers of the content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
     * by the LayerSchemaIds property.
     * If there are no data for a specified LayerSchemaId, it is treated as empty.
     *
     * @var array<string, mixed>|null
     */
    public ?iterable $metadata;
    /**
     * Options to modify the behavior for updating the layers.
     * Merge: the content is updated so that the assigned layers to the content will be a merge of the ones specified in the LayerSchemaIds property
     * and the ones already existing; existing assigned layers not specified in the property are kept and missing layers are assigned.
     * Replace: the content is updated so that only the layers specified in the LayerSchemaIds property are assigned to the content;
     * existing assigned layers not specified in the property are removed and missing layers are assigned.
     * Defaults to Merge.
     *
     * @var string
     */
    public string $layerSchemasUpdateOptions = 'Merge';
    /**
     * Options to modify the behavior for updating the values of schemas.
     * Merge: the values specified in the Metadata dictionary are merged to the existing values of the corresponding schema on the content.
     * Replace: the values specified in the Metadata dictionary entirely replace any existing value of the corresponding schema on the content.
     * Defaults to Merge.
     *
     * @var string
     */
    public string $layerFieldsUpdateOptions = 'Merge';
    /**
     * Options to modify the behavior for updating the content.
     * Merge: the values specified in the Content object are merged to the existing content.
     * Replace: the values specified in the Content object entirely replace the content.
     * Defaults to Merge.
     *
     * @var string
     */
    public string $contentFieldsUpdateOptions = 'Merge';
    /**
     * The ID of the content.
     *
     * @var string
     */
    public string $id;
    public function definedProperties(): array
    {
        return ['layerSchemaIds' => 'layerSchemaIds', 'content' => 'content', 'metadata' => 'metadata', 'layerSchemasUpdateOptions' => 'layerSchemasUpdateOptions', 'layerFieldsUpdateOptions' => 'layerFieldsUpdateOptions', 'contentFieldsUpdateOptions' => 'contentFieldsUpdateOptions', 'id' => 'id'];
    }
}