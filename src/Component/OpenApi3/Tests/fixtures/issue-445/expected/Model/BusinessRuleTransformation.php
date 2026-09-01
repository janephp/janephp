<?php

namespace PicturePark\API\Model;

class BusinessRuleTransformation
{
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @var string|null
     */
    public ?string $traceRefId;
    /**
     * @var string
     */
    public string $kind;
}