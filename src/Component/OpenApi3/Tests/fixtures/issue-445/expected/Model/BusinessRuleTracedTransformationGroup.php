<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedTransformationGroup
{
    /**
     * Trace reference ID of transformation group.
     *
     * @var string|null
     */
    public ?string $traceRefId;
    /**
     * Serialized JSON of input for group
     *
     * @var string|null
     */
    public ?string $input;
    /**
     * Serialized JSON of output for group
     *
     * @var string|null
     */
    public ?string $output;
    /**
     * Detailed traces for each step performed by transformations in group.
     *
     * @var list<BusinessRuleTracedTransformation>|null
     */
    public ?array $transformations;
}