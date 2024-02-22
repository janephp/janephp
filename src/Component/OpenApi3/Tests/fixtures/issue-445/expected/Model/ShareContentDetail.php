<?php

namespace PicturePark\API\Model;

class ShareContentDetail
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The id of the schema with schema type content.
     *
     * @var string
     */
    protected $contentSchemaId;
    /**
     * An optional id list of schemas with type layer.
     *
     * @var list<string>|null
     */
    protected $layerSchemaIds;
    /**
    * The content data. It's an object of dynamic metadata whose structure is defined in the Content schema specified
    by the ContentSchemaId property.
    *
    * @var array<string, mixed>
    */
    protected $content;
    /**
    * The metadata belonging to the layers of the content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
    by the LayerSchemaIds property.
    *
    * @var array<string, mixed>|null
    */
    protected $metadata;
    /**
     * Content ID.
     *
     * @var string
     */
    protected $id;
    /**
     * List of shared outputs for this content.
     *
     * @var list<ShareOutputBase>
     */
    protected $outputs;
    /**
     * The type of content
     *
     * @var mixed
     */
    protected $contentType;
    /**
     * Contains language specific display values, rendered according to the content schema's display pattern configuration.
     *
     * @var mixed
     */
    protected $displayValues;
    /**
     * Contains an URL that can be used to retrieve the icon corresponding to the file type.
     *
     * @var string|null
     */
    protected $iconUrl;
    /**
     * The id of the schema with schema type content.
     *
     * @return string
     */
    public function getContentSchemaId() : string
    {
        return $this->contentSchemaId;
    }
    /**
     * The id of the schema with schema type content.
     *
     * @param string $contentSchemaId
     *
     * @return self
     */
    public function setContentSchemaId(string $contentSchemaId) : self
    {
        $this->initialized['contentSchemaId'] = true;
        $this->contentSchemaId = $contentSchemaId;
        return $this;
    }
    /**
     * An optional id list of schemas with type layer.
     *
     * @return list<string>|null
     */
    public function getLayerSchemaIds() : ?array
    {
        return $this->layerSchemaIds;
    }
    /**
     * An optional id list of schemas with type layer.
     *
     * @param list<string>|null $layerSchemaIds
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
    * The content data. It's an object of dynamic metadata whose structure is defined in the Content schema specified
    by the ContentSchemaId property.
    *
    * @return array<string, mixed>
    */
    public function getContent() : iterable
    {
        return $this->content;
    }
    /**
    * The content data. It's an object of dynamic metadata whose structure is defined in the Content schema specified
    by the ContentSchemaId property.
    *
    * @param array<string, mixed> $content
    *
    * @return self
    */
    public function setContent(iterable $content) : self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
    * The metadata belonging to the layers of the content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
    by the LayerSchemaIds property.
    *
    * @return array<string, mixed>|null
    */
    public function getMetadata() : ?iterable
    {
        return $this->metadata;
    }
    /**
    * The metadata belonging to the layers of the content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
    by the LayerSchemaIds property.
    *
    * @param array<string, mixed>|null $metadata
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
     * Content ID.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Content ID.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * List of shared outputs for this content.
     *
     * @return list<ShareOutputBase>
     */
    public function getOutputs() : array
    {
        return $this->outputs;
    }
    /**
     * List of shared outputs for this content.
     *
     * @param list<ShareOutputBase> $outputs
     *
     * @return self
     */
    public function setOutputs(array $outputs) : self
    {
        $this->initialized['outputs'] = true;
        $this->outputs = $outputs;
        return $this;
    }
    /**
     * The type of content
     *
     * @return mixed
     */
    public function getContentType()
    {
        return $this->contentType;
    }
    /**
     * The type of content
     *
     * @param mixed $contentType
     *
     * @return self
     */
    public function setContentType($contentType) : self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * Contains language specific display values, rendered according to the content schema's display pattern configuration.
     *
     * @return mixed
     */
    public function getDisplayValues()
    {
        return $this->displayValues;
    }
    /**
     * Contains language specific display values, rendered according to the content schema's display pattern configuration.
     *
     * @param mixed $displayValues
     *
     * @return self
     */
    public function setDisplayValues($displayValues) : self
    {
        $this->initialized['displayValues'] = true;
        $this->displayValues = $displayValues;
        return $this;
    }
    /**
     * Contains an URL that can be used to retrieve the icon corresponding to the file type.
     *
     * @return string|null
     */
    public function getIconUrl() : ?string
    {
        return $this->iconUrl;
    }
    /**
     * Contains an URL that can be used to retrieve the icon corresponding to the file type.
     *
     * @param string|null $iconUrl
     *
     * @return self
     */
    public function setIconUrl(?string $iconUrl) : self
    {
        $this->initialized['iconUrl'] = true;
        $this->iconUrl = $iconUrl;
        return $this;
    }
}