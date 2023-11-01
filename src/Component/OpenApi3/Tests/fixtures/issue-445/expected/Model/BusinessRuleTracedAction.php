<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedAction
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Trace reference ID of action
     *
     * @var string|null
     */
    protected $traceRefId;
    /**
     * Indicates if the action modified the document
     *
     * @var bool
     */
    protected $documentModified;
    /**
     * Additional information provided by the trace
     *
     * @var string|null
     */
    protected $text;
    /**
     * Trace reference ID of action
     *
     * @return string|null
     */
    public function getTraceRefId() : ?string
    {
        return $this->traceRefId;
    }
    /**
     * Trace reference ID of action
     *
     * @param string|null $traceRefId
     *
     * @return self
     */
    public function setTraceRefId(?string $traceRefId) : self
    {
        $this->initialized['traceRefId'] = true;
        $this->traceRefId = $traceRefId;
        return $this;
    }
    /**
     * Indicates if the action modified the document
     *
     * @return bool
     */
    public function getDocumentModified() : bool
    {
        return $this->documentModified;
    }
    /**
     * Indicates if the action modified the document
     *
     * @param bool $documentModified
     *
     * @return self
     */
    public function setDocumentModified(bool $documentModified) : self
    {
        $this->initialized['documentModified'] = true;
        $this->documentModified = $documentModified;
        return $this;
    }
    /**
     * Additional information provided by the trace
     *
     * @return string|null
     */
    public function getText() : ?string
    {
        return $this->text;
    }
    /**
     * Additional information provided by the trace
     *
     * @param string|null $text
     *
     * @return self
     */
    public function setText(?string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
}