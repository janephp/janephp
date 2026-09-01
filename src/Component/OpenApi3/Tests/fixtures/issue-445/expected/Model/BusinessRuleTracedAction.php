<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedAction
{
    /**
     * Trace reference ID of action
     *
     * @var string|null
     */
    public ?string $traceRefId;
    /**
     * Indicates if the action modified the document
     *
     * @var bool
     */
    public bool $documentModified;
    /**
     * Additional information provided by the trace
     *
     * @var string|null
     */
    public ?string $text;
}