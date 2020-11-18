<?php

namespace PicturePark\API\Model;

class BusinessRuleTransformationGroup
{
    /**
     * The inputs of the transformation group.
     *
     * @var string[]|null
     */
    protected $inputs;
    /**
     * A list of transformations to apply.
     *
     * @var BusinessRuleTransformation[]|null
     */
    protected $transformations;
    /**
     * Variable name where the final result should be stored in.
     *
     * @var string|null
     */
    protected $storeIn;
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @var string|null
     */
    protected $traceRefId;
    /**
     * The inputs of the transformation group.
     *
     * @return string[]|null
     */
    public function getInputs() : ?array
    {
        return $this->inputs;
    }
    /**
     * The inputs of the transformation group.
     *
     * @param string[]|null $inputs
     *
     * @return self
     */
    public function setInputs(?array $inputs) : self
    {
        $this->inputs = $inputs;
        return $this;
    }
    /**
     * A list of transformations to apply.
     *
     * @return BusinessRuleTransformation[]|null
     */
    public function getTransformations() : ?array
    {
        return $this->transformations;
    }
    /**
     * A list of transformations to apply.
     *
     * @param BusinessRuleTransformation[]|null $transformations
     *
     * @return self
     */
    public function setTransformations(?array $transformations) : self
    {
        $this->transformations = $transformations;
        return $this;
    }
    /**
     * Variable name where the final result should be stored in.
     *
     * @return string|null
     */
    public function getStoreIn() : ?string
    {
        return $this->storeIn;
    }
    /**
     * Variable name where the final result should be stored in.
     *
     * @param string|null $storeIn
     *
     * @return self
     */
    public function setStoreIn(?string $storeIn) : self
    {
        $this->storeIn = $storeIn;
        return $this;
    }
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
}