<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedTransformationGroup
{
    /**
     * Trace reference ID of transformation group.
     *
     * @var string|null
     */
    protected $traceRefId;
    /**
     * Serialized JSON of input for group
     *
     * @var string|null
     */
    protected $input;
    /**
     * Serialized JSON of output for group
     *
     * @var string|null
     */
    protected $output;
    /**
     * Detailed traces for each step performed by transformations in group.
     *
     * @var BusinessRuleTracedTransformation[]|null
     */
    protected $transformations;
    /**
     * Trace reference ID of transformation group.
     *
     * @return string|null
     */
    public function getTraceRefId() : ?string
    {
        return $this->traceRefId;
    }
    /**
     * Trace reference ID of transformation group.
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
     * Serialized JSON of input for group
     *
     * @return string|null
     */
    public function getInput() : ?string
    {
        return $this->input;
    }
    /**
     * Serialized JSON of input for group
     *
     * @param string|null $input
     *
     * @return self
     */
    public function setInput(?string $input) : self
    {
        $this->input = $input;
        return $this;
    }
    /**
     * Serialized JSON of output for group
     *
     * @return string|null
     */
    public function getOutput() : ?string
    {
        return $this->output;
    }
    /**
     * Serialized JSON of output for group
     *
     * @param string|null $output
     *
     * @return self
     */
    public function setOutput(?string $output) : self
    {
        $this->output = $output;
        return $this;
    }
    /**
     * Detailed traces for each step performed by transformations in group.
     *
     * @return BusinessRuleTracedTransformation[]|null
     */
    public function getTransformations() : ?array
    {
        return $this->transformations;
    }
    /**
     * Detailed traces for each step performed by transformations in group.
     *
     * @param BusinessRuleTracedTransformation[]|null $transformations
     *
     * @return self
     */
    public function setTransformations(?array $transformations) : self
    {
        $this->transformations = $transformations;
        return $this;
    }
}