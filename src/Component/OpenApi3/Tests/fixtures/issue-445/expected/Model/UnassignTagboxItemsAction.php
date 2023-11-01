<?php

namespace PicturePark\API\Model;

class UnassignTagboxItemsAction extends BusinessRuleAction
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
     * Path to the object the tagbox is contained in.
     *
     * @var string|null
     */
    protected $path;
    /**
     * ID of the tagbox field.
     *
     * @var string|null
     */
    protected $fieldId;
    /**
     * List of refIds of the items that should be removed.
     *
     * @var mixed|null
     */
    protected $refIds;
    /**
     * Path to the object the tagbox is contained in.
     *
     * @return string|null
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * Path to the object the tagbox is contained in.
     *
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * ID of the tagbox field.
     *
     * @return string|null
     */
    public function getFieldId() : ?string
    {
        return $this->fieldId;
    }
    /**
     * ID of the tagbox field.
     *
     * @param string|null $fieldId
     *
     * @return self
     */
    public function setFieldId(?string $fieldId) : self
    {
        $this->initialized['fieldId'] = true;
        $this->fieldId = $fieldId;
        return $this;
    }
    /**
     * List of refIds of the items that should be removed.
     *
     * @return mixed
     */
    public function getRefIds()
    {
        return $this->refIds;
    }
    /**
     * List of refIds of the items that should be removed.
     *
     * @param mixed $refIds
     *
     * @return self
     */
    public function setRefIds($refIds) : self
    {
        $this->initialized['refIds'] = true;
        $this->refIds = $refIds;
        return $this;
    }
}