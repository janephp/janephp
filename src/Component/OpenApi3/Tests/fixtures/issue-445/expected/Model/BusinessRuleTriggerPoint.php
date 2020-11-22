<?php

namespace PicturePark\API\Model;

class BusinessRuleTriggerPoint
{
    /**
     * Execution scope.
     *
     * @var mixed
     */
    protected $executionScope;
    /**
     * Document type.
     *
     * @var mixed
     */
    protected $documentType;
    /**
     * Action performed.
     *
     * @var mixed
     */
    protected $action;
    /**
     * Execution scope.
     *
     * @return mixed
     */
    public function getExecutionScope()
    {
        return $this->executionScope;
    }
    /**
     * Execution scope.
     *
     * @param mixed $executionScope
     *
     * @return self
     */
    public function setExecutionScope($executionScope) : self
    {
        $this->executionScope = $executionScope;
        return $this;
    }
    /**
     * Document type.
     *
     * @return mixed
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }
    /**
     * Document type.
     *
     * @param mixed $documentType
     *
     * @return self
     */
    public function setDocumentType($documentType) : self
    {
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * Action performed.
     *
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * Action performed.
     *
     * @param mixed $action
     *
     * @return self
     */
    public function setAction($action) : self
    {
        $this->action = $action;
        return $this;
    }
}