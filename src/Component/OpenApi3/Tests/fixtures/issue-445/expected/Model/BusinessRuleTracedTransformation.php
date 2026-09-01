<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedTransformation
{
    /**
     * Trace reference ID of transformation.
     *
     * @var string|null
     */
    public ?string $traceRefId;
    /**
     * Serialized JSON of input of transformation
     *
     * @var string|null
     */
    public ?string $input;
    /**
     * Serialized JSON of output of transformation
     *
     * @var string|null
     */
    public ?string $output;
}