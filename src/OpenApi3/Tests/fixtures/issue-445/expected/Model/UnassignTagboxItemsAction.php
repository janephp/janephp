<?php

namespace PicturePark\API\Model;

class UnassignTagboxItemsAction
{
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @var string|null
     */
    protected $traceRefId;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @return string|null
     */
    public function getTraceRefId() : ?string
    {
        return $this->traceRefId;
    }
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @param string|null $traceRefId
     *
     * @return self
     */
    public function setTraceRefId(?string $traceRefId) : self
    {
        $this->traceRefId = $traceRefId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
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
        $this->refIds = $refIds;
        return $this;
    }
}