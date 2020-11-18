<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedTransformation
{
    /**
     * Trace reference ID of transformation.
     *
     * @var string|null
     */
    protected $traceRefId;
    /**
     * Serialized JSON of input of transformation
     *
     * @var string|null
     */
    protected $input;
    /**
     * Serialized JSON of output of transformation
     *
     * @var string|null
     */
    protected $output;
    /**
     * Trace reference ID of transformation.
     *
     * @return string|null
     */
    public function getTraceRefId() : ?string
    {
        return $this->traceRefId;
    }
    /**
     * Trace reference ID of transformation.
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
     * Serialized JSON of input of transformation
     *
     * @return string|null
     */
    public function getInput() : ?string
    {
        return $this->input;
    }
    /**
     * Serialized JSON of input of transformation
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
     * Serialized JSON of output of transformation
     *
     * @return string|null
     */
    public function getOutput() : ?string
    {
        return $this->output;
    }
    /**
     * Serialized JSON of output of transformation
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
}