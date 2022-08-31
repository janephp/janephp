<?php

namespace PicturePark\API\Model;

class ContentPermissionSetUnassignedCondition extends BusinessRuleCondition
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
     * Permission set id to match on.
     *
     * @var string|null
     */
    protected $permissionSetId;
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
     * Permission set id to match on.
     *
     * @return string|null
     */
    public function getPermissionSetId() : ?string
    {
        return $this->permissionSetId;
    }
    /**
     * Permission set id to match on.
     *
     * @param string|null $permissionSetId
     *
     * @return self
     */
    public function setPermissionSetId(?string $permissionSetId) : self
    {
        $this->permissionSetId = $permissionSetId;
        return $this;
    }
}