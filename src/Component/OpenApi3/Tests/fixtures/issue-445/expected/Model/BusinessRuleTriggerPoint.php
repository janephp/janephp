<?php

namespace PicturePark\API\Model;

class BusinessRuleTriggerPoint
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Execution scope.
     *
     * @var string
     */
    protected $executionScope;
    /**
     * Document type.
     *
     * @var string
     */
    protected $documentType;
    /**
     * Action performed.
     *
     * @var string
     */
    protected $action;
    /**
     * Execution scope.
     *
     * @return string
     */
    public function getExecutionScope(): string
    {
        return $this->executionScope;
    }
    /**
     * Execution scope.
     *
     * @param string $executionScope
     *
     * @return self
     */
    public function setExecutionScope(string $executionScope): self
    {
        $this->initialized['executionScope'] = true;
        $this->executionScope = $executionScope;
        return $this;
    }
    /**
     * Document type.
     *
     * @return string
     */
    public function getDocumentType(): string
    {
        return $this->documentType;
    }
    /**
     * Document type.
     *
     * @param string $documentType
     *
     * @return self
     */
    public function setDocumentType(string $documentType): self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * Action performed.
     *
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }
    /**
     * Action performed.
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
}