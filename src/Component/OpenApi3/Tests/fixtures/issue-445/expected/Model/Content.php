<?php

namespace PicturePark\API\Model;

class Content
{
    /**
     * Audit information.
     *
     * @var mixed|null
     */
    protected $audit;
    /**
     * The id of the schema with schema type content.
     *
     * @var string
     */
    protected $contentSchemaId;
    /**
     * The content type of this content. All except Virtual are binary files.
     *
     * @var mixed
     */
    protected $contentType;
    /**
     * An optional id list of schemas with schema type layer.
     *
     * @var string[]|null
     */
    protected $layerSchemaIds;
    /**
     * Contains display values of the specified language, rendered according to the content schema's display pattern configuration.
     *
     * @var string[]
     */
    protected $displayValues;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * All the ids of the broken references (tagboxes)
     *
     * @var string[]|null
     */
    protected $brokenReferenceIds;
    /**
     * All the ids of the broken indirect references (tagbox that has a property that reference a broken tagbox)
     *
     * @var string[]|null
     */
    protected $brokenIndirectReferenceIds;
    /**
     * All the target ids of the broken relations
     *
     * @var string[]|null
     */
    protected $brokenRelationTargetIds;
    /**
     * Life cycle of content
     *
     * @var mixed
     */
    protected $lifeCycle;
    /**
     * Audit information.
     *
     * @return mixed
     */
    public function getAudit()
    {
        return $this->audit;
    }
    /**
     * Audit information.
     *
     * @param mixed $audit
     *
     * @return self
     */
    public function setAudit($audit) : self
    {
        $this->audit = $audit;
        return $this;
    }
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
        $this->contentSchemaId = $contentSchemaId;
        return $this;
    }
    /**
     * The content type of this content. All except Virtual are binary files.
     *
     * @return mixed
     */
    public function getContentType()
    {
        return $this->contentType;
    }
    /**
     * The content type of this content. All except Virtual are binary files.
     *
     * @param mixed $contentType
     *
     * @return self
     */
    public function setContentType($contentType) : self
    {
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * An optional id list of schemas with schema type layer.
     *
     * @return string[]|null
     */
    public function getLayerSchemaIds() : ?array
    {
        return $this->layerSchemaIds;
    }
    /**
     * An optional id list of schemas with schema type layer.
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
     * Contains display values of the specified language, rendered according to the content schema's display pattern configuration.
     *
     * @return string[]
     */
    public function getDisplayValues() : iterable
    {
        return $this->displayValues;
    }
    /**
     * Contains display values of the specified language, rendered according to the content schema's display pattern configuration.
     *
     * @param string[] $displayValues
     *
     * @return self
     */
    public function setDisplayValues(iterable $displayValues) : self
    {
        $this->displayValues = $displayValues;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
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
     * All the ids of the broken references (tagboxes)
     *
     * @return string[]|null
     */
    public function getBrokenReferenceIds() : ?array
    {
        return $this->brokenReferenceIds;
    }
    /**
     * All the ids of the broken references (tagboxes)
     *
     * @param string[]|null $brokenReferenceIds
     *
     * @return self
     */
    public function setBrokenReferenceIds(?array $brokenReferenceIds) : self
    {
        $this->brokenReferenceIds = $brokenReferenceIds;
        return $this;
    }
    /**
     * All the ids of the broken indirect references (tagbox that has a property that reference a broken tagbox)
     *
     * @return string[]|null
     */
    public function getBrokenIndirectReferenceIds() : ?array
    {
        return $this->brokenIndirectReferenceIds;
    }
    /**
     * All the ids of the broken indirect references (tagbox that has a property that reference a broken tagbox)
     *
     * @param string[]|null $brokenIndirectReferenceIds
     *
     * @return self
     */
    public function setBrokenIndirectReferenceIds(?array $brokenIndirectReferenceIds) : self
    {
        $this->brokenIndirectReferenceIds = $brokenIndirectReferenceIds;
        return $this;
    }
    /**
     * All the target ids of the broken relations
     *
     * @return string[]|null
     */
    public function getBrokenRelationTargetIds() : ?array
    {
        return $this->brokenRelationTargetIds;
    }
    /**
     * All the target ids of the broken relations
     *
     * @param string[]|null $brokenRelationTargetIds
     *
     * @return self
     */
    public function setBrokenRelationTargetIds(?array $brokenRelationTargetIds) : self
    {
        $this->brokenRelationTargetIds = $brokenRelationTargetIds;
        return $this;
    }
    /**
     * Life cycle of content
     *
     * @return mixed
     */
    public function getLifeCycle()
    {
        return $this->lifeCycle;
    }
    /**
     * Life cycle of content
     *
     * @param mixed $lifeCycle
     *
     * @return self
     */
    public function setLifeCycle($lifeCycle) : self
    {
        $this->lifeCycle = $lifeCycle;
        return $this;
    }
}