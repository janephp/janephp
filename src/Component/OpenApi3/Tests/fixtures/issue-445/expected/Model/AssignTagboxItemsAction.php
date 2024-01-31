<?php

namespace PicturePark\API\Model;

class AssignTagboxItemsAction extends BusinessRuleAction
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
     * List of refIds of the items that should be assigned.
     *
     * @var mixed|null
     */
    protected $refIds;
    /**
    * Indicates whether all the already assigned tags get replaced by the set specified in the action.
    If false, the not already assigned tags get added, the rest is left as is.
    *
    * @var bool
    */
    protected $replace;
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
     * List of refIds of the items that should be assigned.
     *
     * @return mixed
     */
    public function getRefIds()
    {
        return $this->refIds;
    }
    /**
     * List of refIds of the items that should be assigned.
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
    /**
    * Indicates whether all the already assigned tags get replaced by the set specified in the action.
    If false, the not already assigned tags get added, the rest is left as is.
    *
    * @return bool
    */
    public function getReplace() : bool
    {
        return $this->replace;
    }
    /**
    * Indicates whether all the already assigned tags get replaced by the set specified in the action.
    If false, the not already assigned tags get added, the rest is left as is.
    *
    * @param bool $replace
    *
    * @return self
    */
    public function setReplace(bool $replace) : self
    {
        $this->initialized['replace'] = true;
        $this->replace = $replace;
        return $this;
    }
}