<?php

namespace PicturePark\API\Model;

class ContentMetadataUpdateRequest
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * An optional list of IDs of the schemas that should be updated/replaced based on the options below and Metadata provided.
    The SchemaType of the specified schemas must be Layer.
    *
    * @var string[]|null
    */
    protected $layerSchemaIds;
    /**
    * The content data of the content. It's an object of dynamic metadata whose structure is defined in the Content schema identified by
    the ContentSchemaId property. Updating the Content property is only possible for virtual items (contents
    whose ContentType is Virtual).
    Update of content data will be done only if this attribute has any data, i.e. if it's not null or empty.
    *
    * @var mixed[]|null
    */
    protected $content;
    /**
    * The dynamic data structure matching the field schematics of the schemas with type layer (LayerSchemaIds).
    The metadata belonging to the layers of the content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
    by the LayerSchemaIds property.
    If there are no data for a specified LayerSchemaId, it is treated as empty.
    *
    * @var mixed[]|null
    */
    protected $metadata;
    /**
    * Options to modify the behavior for updating the layers.
    Merge: the content is updated so that the assigned layers to the content will be a merge of the ones specified in the LayerSchemaIds property
    and the ones already existing; existing assigned layers not specified in the property are kept and missing layers are assigned.
    Replace: the content is updated so that only the layers specified in the LayerSchemaIds property are assigned to the content;
    existing assigned layers not specified in the property are removed and missing layers are assigned.
    Defaults to Merge.
    *
    * @var mixed
    */
    protected $layerSchemasUpdateOptions = 'Merge';
    /**
    * Options to modify the behavior for updating the values of schemas.
    Merge: the values specified in the Metadata dictionary are merged to the existing values of the corresponding schema on the content.
    Replace: the values specified in the Metadata dictionary entirely replace any existing value of the corresponding schema on the content.
    Defaults to Merge.
    *
    * @var mixed
    */
    protected $layerFieldsUpdateOptions = 'Merge';
    /**
    * Options to modify the behavior for updating the content.
    Merge: the values specified in the Content object are merged to the existing content.
    Replace: the values specified in the Content object entirely replace the content.
    Defaults to Merge.
    *
    * @var mixed
    */
    protected $contentFieldsUpdateOptions = 'Merge';
    /**
    * An optional list of IDs of the schemas that should be updated/replaced based on the options below and Metadata provided.
    The SchemaType of the specified schemas must be Layer.
    *
    * @return string[]|null
    */
    public function getLayerSchemaIds() : ?array
    {
        return $this->layerSchemaIds;
    }
    /**
    * An optional list of IDs of the schemas that should be updated/replaced based on the options below and Metadata provided.
    The SchemaType of the specified schemas must be Layer.
    *
    * @param string[]|null $layerSchemaIds
    *
    * @return self
    */
    public function setLayerSchemaIds(?array $layerSchemaIds) : self
    {
        $this->initialized['layerSchemaIds'] = true;
        $this->layerSchemaIds = $layerSchemaIds;
        return $this;
    }
    /**
    * The content data of the content. It's an object of dynamic metadata whose structure is defined in the Content schema identified by
    the ContentSchemaId property. Updating the Content property is only possible for virtual items (contents
    whose ContentType is Virtual).
    Update of content data will be done only if this attribute has any data, i.e. if it's not null or empty.
    *
    * @return mixed[]|null
    */
    public function getContent() : ?iterable
    {
        return $this->content;
    }
    /**
    * The content data of the content. It's an object of dynamic metadata whose structure is defined in the Content schema identified by
    the ContentSchemaId property. Updating the Content property is only possible for virtual items (contents
    whose ContentType is Virtual).
    Update of content data will be done only if this attribute has any data, i.e. if it's not null or empty.
    *
    * @param mixed[]|null $content
    *
    * @return self
    */
    public function setContent(?iterable $content) : self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
    * The dynamic data structure matching the field schematics of the schemas with type layer (LayerSchemaIds).
    The metadata belonging to the layers of the content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
    by the LayerSchemaIds property.
    If there are no data for a specified LayerSchemaId, it is treated as empty.
    *
    * @return mixed[]|null
    */
    public function getMetadata() : ?iterable
    {
        return $this->metadata;
    }
    /**
    * The dynamic data structure matching the field schematics of the schemas with type layer (LayerSchemaIds).
    The metadata belonging to the layers of the content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
    by the LayerSchemaIds property.
    If there are no data for a specified LayerSchemaId, it is treated as empty.
    *
    * @param mixed[]|null $metadata
    *
    * @return self
    */
    public function setMetadata(?iterable $metadata) : self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
    * Options to modify the behavior for updating the layers.
    Merge: the content is updated so that the assigned layers to the content will be a merge of the ones specified in the LayerSchemaIds property
    and the ones already existing; existing assigned layers not specified in the property are kept and missing layers are assigned.
    Replace: the content is updated so that only the layers specified in the LayerSchemaIds property are assigned to the content;
    existing assigned layers not specified in the property are removed and missing layers are assigned.
    Defaults to Merge.
    *
    * @return mixed
    */
    public function getLayerSchemasUpdateOptions()
    {
        return $this->layerSchemasUpdateOptions;
    }
    /**
    * Options to modify the behavior for updating the layers.
    Merge: the content is updated so that the assigned layers to the content will be a merge of the ones specified in the LayerSchemaIds property
    and the ones already existing; existing assigned layers not specified in the property are kept and missing layers are assigned.
    Replace: the content is updated so that only the layers specified in the LayerSchemaIds property are assigned to the content;
    existing assigned layers not specified in the property are removed and missing layers are assigned.
    Defaults to Merge.
    *
    * @param mixed $layerSchemasUpdateOptions
    *
    * @return self
    */
    public function setLayerSchemasUpdateOptions($layerSchemasUpdateOptions) : self
    {
        $this->initialized['layerSchemasUpdateOptions'] = true;
        $this->layerSchemasUpdateOptions = $layerSchemasUpdateOptions;
        return $this;
    }
    /**
    * Options to modify the behavior for updating the values of schemas.
    Merge: the values specified in the Metadata dictionary are merged to the existing values of the corresponding schema on the content.
    Replace: the values specified in the Metadata dictionary entirely replace any existing value of the corresponding schema on the content.
    Defaults to Merge.
    *
    * @return mixed
    */
    public function getLayerFieldsUpdateOptions()
    {
        return $this->layerFieldsUpdateOptions;
    }
    /**
    * Options to modify the behavior for updating the values of schemas.
    Merge: the values specified in the Metadata dictionary are merged to the existing values of the corresponding schema on the content.
    Replace: the values specified in the Metadata dictionary entirely replace any existing value of the corresponding schema on the content.
    Defaults to Merge.
    *
    * @param mixed $layerFieldsUpdateOptions
    *
    * @return self
    */
    public function setLayerFieldsUpdateOptions($layerFieldsUpdateOptions) : self
    {
        $this->initialized['layerFieldsUpdateOptions'] = true;
        $this->layerFieldsUpdateOptions = $layerFieldsUpdateOptions;
        return $this;
    }
    /**
    * Options to modify the behavior for updating the content.
    Merge: the values specified in the Content object are merged to the existing content.
    Replace: the values specified in the Content object entirely replace the content.
    Defaults to Merge.
    *
    * @return mixed
    */
    public function getContentFieldsUpdateOptions()
    {
        return $this->contentFieldsUpdateOptions;
    }
    /**
    * Options to modify the behavior for updating the content.
    Merge: the values specified in the Content object are merged to the existing content.
    Replace: the values specified in the Content object entirely replace the content.
    Defaults to Merge.
    *
    * @param mixed $contentFieldsUpdateOptions
    *
    * @return self
    */
    public function setContentFieldsUpdateOptions($contentFieldsUpdateOptions) : self
    {
        $this->initialized['contentFieldsUpdateOptions'] = true;
        $this->contentFieldsUpdateOptions = $contentFieldsUpdateOptions;
        return $this;
    }
}