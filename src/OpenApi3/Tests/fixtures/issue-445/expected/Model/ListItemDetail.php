<?php

namespace PicturePark\API\Model;

class ListItemDetail
{
    /**
     * The list item ID.
     *
     * @var string
     */
    protected $id;
    /**
     * The ID of the content schema. The SchemaType of the specified schema must be List.
     *
     * @var string
     */
    protected $contentSchemaId;
    /**
    * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema specified
    by the ContentSchemaId property.
    *
    * @var mixed|null
    */
    protected $content;
    /**
     * Contains language specific display values. They are calculated values based on the template stored in the Content schema DisplayPatterns property.
     *
     * @var mixed|null
     */
    protected $displayValues;
    /**
     * All the IDs of the referenced list items (tagboxes) that do not exist in the system.
     *
     * @var string[]|null
     */
    protected $brokenReferenceIds;
    /**
     * All the IDs of the contents or list items target of a relation that do not exist in the system.
     *
     * @var string[]|null
     */
    protected $brokenRelationTargetIds;
    /**
    * All the IDs of the indirectly referenced list items (tagboxes) that do not exist in the system.
    They are referenced list items that reference at least a list item that do not exist in the system.
    *
    * @var string[]|null
    */
    protected $brokenIndirectReferenceIds;
    /**
     * Audit information.
     *
     * @var mixed|null
     */
    protected $audit;
    /**
     * Activity information: dynamically mapped from configured metadata fields or from audit information if no mapping is configured.
     *
     * @var mixed|null
     */
    protected $activity;
    /**
     * The list item ID.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The list item ID.
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
     * The ID of the content schema. The SchemaType of the specified schema must be List.
     *
     * @return string
     */
    public function getContentSchemaId() : string
    {
        return $this->contentSchemaId;
    }
    /**
     * The ID of the content schema. The SchemaType of the specified schema must be List.
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
    * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema specified
    by the ContentSchemaId property.
    *
    * @return mixed
    */
    public function getContent()
    {
        return $this->content;
    }
    /**
    * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema specified
    by the ContentSchemaId property.
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
     * Contains language specific display values. They are calculated values based on the template stored in the Content schema DisplayPatterns property.
     *
     * @return mixed
     */
    public function getDisplayValues()
    {
        return $this->displayValues;
    }
    /**
     * Contains language specific display values. They are calculated values based on the template stored in the Content schema DisplayPatterns property.
     *
     * @param mixed $displayValues
     *
     * @return self
     */
    public function setDisplayValues($displayValues) : self
    {
        $this->displayValues = $displayValues;
        return $this;
    }
    /**
     * All the IDs of the referenced list items (tagboxes) that do not exist in the system.
     *
     * @return string[]|null
     */
    public function getBrokenReferenceIds() : ?array
    {
        return $this->brokenReferenceIds;
    }
    /**
     * All the IDs of the referenced list items (tagboxes) that do not exist in the system.
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
     * All the IDs of the contents or list items target of a relation that do not exist in the system.
     *
     * @return string[]|null
     */
    public function getBrokenRelationTargetIds() : ?array
    {
        return $this->brokenRelationTargetIds;
    }
    /**
     * All the IDs of the contents or list items target of a relation that do not exist in the system.
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
    * All the IDs of the indirectly referenced list items (tagboxes) that do not exist in the system.
    They are referenced list items that reference at least a list item that do not exist in the system.
    *
    * @return string[]|null
    */
    public function getBrokenIndirectReferenceIds() : ?array
    {
        return $this->brokenIndirectReferenceIds;
    }
    /**
    * All the IDs of the indirectly referenced list items (tagboxes) that do not exist in the system.
    They are referenced list items that reference at least a list item that do not exist in the system.
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
     * Activity information: dynamically mapped from configured metadata fields or from audit information if no mapping is configured.
     *
     * @return mixed
     */
    public function getActivity()
    {
        return $this->activity;
    }
    /**
     * Activity information: dynamically mapped from configured metadata fields or from audit information if no mapping is configured.
     *
     * @param mixed $activity
     *
     * @return self
     */
    public function setActivity($activity) : self
    {
        $this->activity = $activity;
        return $this;
    }
}