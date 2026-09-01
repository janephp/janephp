<?php

namespace PicturePark\API\Model;

class BusinessRuleTraceLog
{
    /**
     * ID of the trace.
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * ID of the document.
     *
     * @var string|null
     */
    public ?string $documentId;
    /**
     * Type of the document.
     *
     * @var string
     */
    public string $documentType;
    /**
     * IDs of rules that were traced for this document.
     *
     * @var list<string>|null
     */
    public ?array $ruleIds;
    /**
     * Detailed information about rules traced.
     *
     * @var list<BusinessRuleTracedRule>|null
     */
    public ?array $rules;
    /**
     * Validation errors occuring after all rules have ran.
     *
     * @var list<ErrorResponse>|null
     */
    public ?array $validationErrors;
    /**
     * General errors occuring when saving the document.
     *
     * @var list<ErrorResponse>|null
     */
    public ?array $generalErrors;
    /**
     * Audit information.
     *
     * @var UserAudit|null
     */
    public ?UserAudit $audit;
}