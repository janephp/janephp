<?php

namespace PicturePark\API\Model;

class BusinessRuleTransformationGroup
{
    /**
     * The inputs of the transformation group.
     *
     * @var list<string>|null
     */
    public ?array $inputs;
    /**
     * A list of transformations to apply.
     *
     * @var list<BusinessRuleTransformation>|null
     */
    public ?array $transformations;
    /**
     * Variable name where the final result should be stored in.
     *
     * @var string|null
     */
    public ?string $storeIn;
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @var string|null
     */
    public ?string $traceRefId;
}