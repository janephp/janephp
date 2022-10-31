<?php

namespace PicturePark\API\Model;

class BusinessRuleFiredEventDetail
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['documentId'] = true;
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
        $this->initialized['documentType'] = true;
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
        $this->initialized['ruleIds'] = true;
        $this->ruleIds = $ruleIds;
        return $this;
    }
}