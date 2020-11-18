<?php

namespace PicturePark\API\Model;

class MatchRegexCondition
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
     * JSON path to the field
     *
     * @var string|null
     */
    protected $fieldPath;
    /**
     * Regular expression
     *
     * @var string|null
     */
    protected $regex;
    /**
     * Optional variable name to store the matched regex groups in
     *
     * @var string|null
     */
    protected $storeIn;
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
     * JSON path to the field
     *
     * @return string|null
     */
    public function getFieldPath() : ?string
    {
        return $this->fieldPath;
    }
    /**
     * JSON path to the field
     *
     * @param string|null $fieldPath
     *
     * @return self
     */
    public function setFieldPath(?string $fieldPath) : self
    {
        $this->fieldPath = $fieldPath;
        return $this;
    }
    /**
     * Regular expression
     *
     * @return string|null
     */
    public function getRegex() : ?string
    {
        return $this->regex;
    }
    /**
     * Regular expression
     *
     * @param string|null $regex
     *
     * @return self
     */
    public function setRegex(?string $regex) : self
    {
        $this->regex = $regex;
        return $this;
    }
    /**
     * Optional variable name to store the matched regex groups in
     *
     * @return string|null
     */
    public function getStoreIn() : ?string
    {
        return $this->storeIn;
    }
    /**
     * Optional variable name to store the matched regex groups in
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
}