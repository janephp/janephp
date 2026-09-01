<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedEvaluationCondition
{
    /**
     * Trace reference ID of condition.
     *
     * @var string|null
     */
    public ?string $traceRefId;
    /**
     * Indicates if this condition evaluated to true.
     *
     * @var bool
     */
    public bool $satisfied;
    /**
     * Additional reason why condition evaluated to given result.
     *
     * @var string|null
     */
    public ?string $reason;
}