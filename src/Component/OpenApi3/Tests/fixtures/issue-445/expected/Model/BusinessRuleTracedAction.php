<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedAction
{
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
        $this->text = $text;
        return $this;
    }
}