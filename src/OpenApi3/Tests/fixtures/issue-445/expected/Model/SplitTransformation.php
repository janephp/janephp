<?php

namespace PicturePark\API\Model;

class SplitTransformation
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
     * Separators to use, supports variables, an array of strings including escape sequences or null to split on any white space character.
     *
     * @var mixed|null
     */
    protected $separators;
    /**
     * Keeps empty items. Empty items will be returned as empty strings.
     *
     * @var bool
     */
    protected $keepEmpty;
    /**
     * Trims each entry for punctuation and white space.
     *
     * @var bool
     */
    protected $trim;
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
     * Separators to use, supports variables, an array of strings including escape sequences or null to split on any white space character.
     *
     * @return mixed
     */
    public function getSeparators()
    {
        return $this->separators;
    }
    /**
     * Separators to use, supports variables, an array of strings including escape sequences or null to split on any white space character.
     *
     * @param mixed $separators
     *
     * @return self
     */
    public function setSeparators($separators) : self
    {
        $this->separators = $separators;
        return $this;
    }
    /**
     * Keeps empty items. Empty items will be returned as empty strings.
     *
     * @return bool
     */
    public function getKeepEmpty() : bool
    {
        return $this->keepEmpty;
    }
    /**
     * Keeps empty items. Empty items will be returned as empty strings.
     *
     * @param bool $keepEmpty
     *
     * @return self
     */
    public function setKeepEmpty(bool $keepEmpty) : self
    {
        $this->keepEmpty = $keepEmpty;
        return $this;
    }
    /**
     * Trims each entry for punctuation and white space.
     *
     * @return bool
     */
    public function getTrim() : bool
    {
        return $this->trim;
    }
    /**
     * Trims each entry for punctuation and white space.
     *
     * @param bool $trim
     *
     * @return self
     */
    public function setTrim(bool $trim) : self
    {
        $this->trim = $trim;
        return $this;
    }
}