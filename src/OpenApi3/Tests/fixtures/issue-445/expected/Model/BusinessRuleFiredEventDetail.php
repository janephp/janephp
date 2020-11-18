<?php

namespace PicturePark\API\Model;

class BusinessRuleFiredEventDetail
{
    /**
     * 
     *
     * @var string|null
     */
    protected $documentId;
    /**
     * 
     *
     * @var string|null
     */
    protected $documentType;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $ruleIds;
    /**
     * 
     *
     * @return string|null
     */
    public function getDocumentId() : ?string
    {
        return $this->documentId;
    }
    /**
     * 
     *
     * @param string|null $documentId
     *
     * @return self
     */
    public function setDocumentId(?string $documentId) : self
    {
        $this->documentId = $documentId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDocumentType() : ?string
    {
        return $this->documentType;
    }
    /**
     * 
     *
     * @param string|null $documentType
     *
     * @return self
     */
    public function setDocumentType(?string $documentType) : self
    {
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRuleIds() : ?array
    {
        return $this->ruleIds;
    }
    /**
     * 
     *
     * @param string[]|null $ruleIds
     *
     * @return self
     */
    public function setRuleIds(?array $ruleIds) : self
    {
        $this->ruleIds = $ruleIds;
        return $this;
    }
}