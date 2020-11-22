<?php

namespace PicturePark\API\Model;

class ContentCreateRequest
{
    /**
    * The ID of the content schema. The SchemaType of the specified schema must be Content.
    The schema specifies the structure of the Content dictionary.
    *
    * @var string
    */
    protected $contentSchemaId;
    /**
    * An optional list of IDs of the schemas that form the layers of the content.
    The SchemaType of the specified schemas must be Layer.
    *
    * @var string[]|null
    */
    protected $layerSchemaIds;
    /**
     * The content data of the content. It's an object of dynamic metadata whose structure is defined in the Content schema identified by the ContentSchemaId property.
     *
     * @var mixed|null
     */
    protected $content;
    /**
    * The dynamic data structure matching the field schematics of the schemas with type layer (LayerSchemaIds).
    The metadata belonging to the layers of the content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
    by the LayerSchemaIds property.
    *
    * @var mixed[]|null
    */
    protected $metadata;
    /**
     * An optional list of content permission set IDs which control content permissions. These permissions control content accessibility for the users that do not own the content.
     *
     * @var string[]|null
     */
    protected $contentPermissionSetIds;
    /**
    * Optional client reference for this request.
    Will be returned back in response to make easier for clients to match request items with the respective results.
    It is not persisted anywhere and it is ignored in single operations.
    *
    * @var string|null
    */
    protected $requestId;
    /**
    * The ID of the content schema. The SchemaType of the specified schema must be Content.
    The schema specifies the structure of the Content dictionary.
    *
    * @return string
    */
    public function getContentSchemaId() : string
    {
        return $this->contentSchemaId;
    }
    /**
    * The ID of the content schema. The SchemaType of the specified schema must be Content.
    The schema specifies the structure of the Content dictionary.
    *
    * @param string $contentSchemaId
    *
    * @return self
    */
    public function setContentSchemaId(string $contentSchemaId) : self
    {
        $this->contentSchemaId = $contentSchemaId;
        return $this;
    }
    /**
    * An optional list of IDs of the schemas that form the layers of the content.
    The SchemaType of the specified schemas must be Layer.
    *
    * @return string[]|null
    */
    public function getLayerSchemaIds() : ?array
    {
        return $this->layerSchemaIds;
    }
    /**
    * An optional list of IDs of the schemas that form the layers of the content.
    The SchemaType of the specified schemas must be Layer.
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
     * The content data of the content. It's an object of dynamic metadata whose structure is defined in the Content schema identified by the ContentSchemaId property.
     *
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * The content data of the content. It's an object of dynamic metadata whose structure is defined in the Content schema identified by the ContentSchemaId property.
     *
     * @param mixed $content
     *
     * @return self
     */
    public function setContent($content) : self
    {
        $this->content = $content;
        return $this;
    }
    /**
    * The dynamic data structure matching the field schematics of the schemas with type layer (LayerSchemaIds).
    The metadata belonging to the layers of the content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
    by the LayerSchemaIds property.
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
    *
    * @param mixed[]|null $metadata
    *
    * @return self
    */
    public function setMetadata(?iterable $metadata) : self
    {
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * An optional list of content permission set IDs which control content permissions. These permissions control content accessibility for the users that do not own the content.
     *
     * @return string[]|null
     */
    public function getContentPermissionSetIds() : ?array
    {
        return $this->contentPermissionSetIds;
    }
    /**
     * An optional list of content permission set IDs which control content permissions. These permissions control content accessibility for the users that do not own the content.
     *
     * @param string[]|null $contentPermissionSetIds
     *
     * @return self
     */
    public function setContentPermissionSetIds(?array $contentPermissionSetIds) : self
    {
        $this->contentPermissionSetIds = $contentPermissionSetIds;
        return $this;
    }
    /**
    * Optional client reference for this request.
    Will be returned back in response to make easier for clients to match request items with the respective results.
    It is not persisted anywhere and it is ignored in single operations.
    *
    * @return string|null
    */
    public function getRequestId() : ?string
    {
        return $this->requestId;
    }
    /**
    * Optional client reference for this request.
    Will be returned back in response to make easier for clients to match request items with the respective results.
    It is not persisted anywhere and it is ignored in single operations.
    *
    * @param string|null $requestId
    *
    * @return self
    */
    public function setRequestId(?string $requestId) : self
    {
        $this->requestId = $requestId;
        return $this;
    }
}