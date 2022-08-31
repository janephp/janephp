<?php

namespace PicturePark\API\Model;

class BooleanCondition extends BusinessRuleCondition
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
     * The conditions.
     *
     * @var BusinessRuleCondition[]|null
     */
    protected $conditions;
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
     * The conditions.
     *
     * @return BusinessRuleCondition[]|null
     */
    public function getConditions() : ?array
    {
        return $this->conditions;
    }
    /**
     * The conditions.
     *
     * @param BusinessRuleCondition[]|null $conditions
     *
     * @return self
     */
    public function setConditions(?array $conditions) : self
    {
        $this->conditions = $conditions;
        return $this;
    }
}