<?php

namespace PicturePark\API\Model;

class BusinessRuleTraceLog
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
     * ID of the trace.
     *
     * @var string|null
     */
    protected $id;
    /**
     * ID of the document.
     *
     * @var string|null
     */
    protected $documentId;
    /**
     * Type of the document.
     *
     * @var mixed
     */
    protected $documentType;
    /**
     * IDs of rules that were traced for this document.
     *
     * @var list<string>|null
     */
    protected $ruleIds;
    /**
     * Detailed information about rules traced.
     *
     * @var list<BusinessRuleTracedRule>|null
     */
    protected $rules;
    /**
     * Validation errors occuring after all rules have ran.
     *
     * @var list<ErrorResponse>|null
     */
    protected $validationErrors;
    /**
     * General errors occuring when saving the document.
     *
     * @var list<ErrorResponse>|null
     */
    protected $generalErrors;
    /**
     * Audit information.
     *
     * @var mixed|null
     */
    protected $audit;
    /**
     * ID of the trace.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * ID of the trace.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * ID of the document.
     *
     * @return string|null
     */
    public function getDocumentId(): ?string
    {
        return $this->documentId;
    }
    /**
     * ID of the document.
     *
     * @param string|null $documentId
     *
     * @return self
     */
    public function setDocumentId(?string $documentId): self
    {
        $this->initialized['documentId'] = true;
        $this->documentId = $documentId;
        return $this;
    }
    /**
     * Type of the document.
     *
     * @return mixed
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }
    /**
     * Type of the document.
     *
     * @param mixed $documentType
     *
     * @return self
     */
    public function setDocumentType($documentType): self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * IDs of rules that were traced for this document.
     *
     * @return list<string>|null
     */
    public function getRuleIds(): ?array
    {
        return $this->ruleIds;
    }
    /**
     * IDs of rules that were traced for this document.
     *
     * @param list<string>|null $ruleIds
     *
     * @return self
     */
    public function setRuleIds(?array $ruleIds): self
    {
        $this->initialized['ruleIds'] = true;
        $this->ruleIds = $ruleIds;
        return $this;
    }
    /**
     * Detailed information about rules traced.
     *
     * @return list<BusinessRuleTracedRule>|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }
    /**
     * Detailed information about rules traced.
     *
     * @param list<BusinessRuleTracedRule>|null $rules
     *
     * @return self
     */
    public function setRules(?array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
    /**
     * Validation errors occuring after all rules have ran.
     *
     * @return list<ErrorResponse>|null
     */
    public function getValidationErrors(): ?array
    {
        return $this->validationErrors;
    }
    /**
     * Validation errors occuring after all rules have ran.
     *
     * @param list<ErrorResponse>|null $validationErrors
     *
     * @return self
     */
    public function setValidationErrors(?array $validationErrors): self
    {
        $this->initialized['validationErrors'] = true;
        $this->validationErrors = $validationErrors;
        return $this;
    }
    /**
     * General errors occuring when saving the document.
     *
     * @return list<ErrorResponse>|null
     */
    public function getGeneralErrors(): ?array
    {
        return $this->generalErrors;
    }
    /**
     * General errors occuring when saving the document.
     *
     * @param list<ErrorResponse>|null $generalErrors
     *
     * @return self
     */
    public function setGeneralErrors(?array $generalErrors): self
    {
        $this->initialized['generalErrors'] = true;
        $this->generalErrors = $generalErrors;
        return $this;
    }
    /**
     * Audit information.
     *
     * @return mixed
     */
    public function getAudit()
    {
        return $this->audit;
    }
    /**
     * Audit information.
     *
     * @param mixed $audit
     *
     * @return self
     */
    public function setAudit($audit): self
    {
        $this->initialized['audit'] = true;
        $this->audit = $audit;
        return $this;
    }
}