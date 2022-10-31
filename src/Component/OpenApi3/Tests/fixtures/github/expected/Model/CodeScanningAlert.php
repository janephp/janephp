<?php

namespace Github\Model;

class CodeScanningAlert extends \ArrayObject
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
     * @var int
     */
    protected $number;
    /**
     * A unique identifier for the rule used to detect the alert.
     *
     * @var string
     */
    protected $ruleId;
    /**
     * The severity of the alert.
     *
     * @var string
     */
    protected $ruleSeverity;
    /**
     * A short description of the rule used to detect the alert.
     *
     * @var string
     */
    protected $ruleDescription;
    /**
     * The name of the tool used to detect the alert.
     *
     * @var string|null
     */
    protected $tool;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Whether or not the alert is open.
     *
     * @var bool
     */
    protected $open;
    /**
     * 
     *
     * @var CodeScanningAlertClosedBy|null
     */
    protected $closedBy;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $closedAt;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $closedReason;
    /**
     * 
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * A unique identifier for the rule used to detect the alert.
     *
     * @return string
     */
    public function getRuleId() : string
    {
        return $this->ruleId;
    }
    /**
     * A unique identifier for the rule used to detect the alert.
     *
     * @param string $ruleId
     *
     * @return self
     */
    public function setRuleId(string $ruleId) : self
    {
        $this->initialized['ruleId'] = true;
        $this->ruleId = $ruleId;
        return $this;
    }
    /**
     * The severity of the alert.
     *
     * @return string
     */
    public function getRuleSeverity() : string
    {
        return $this->ruleSeverity;
    }
    /**
     * The severity of the alert.
     *
     * @param string $ruleSeverity
     *
     * @return self
     */
    public function setRuleSeverity(string $ruleSeverity) : self
    {
        $this->initialized['ruleSeverity'] = true;
        $this->ruleSeverity = $ruleSeverity;
        return $this;
    }
    /**
     * A short description of the rule used to detect the alert.
     *
     * @return string
     */
    public function getRuleDescription() : string
    {
        return $this->ruleDescription;
    }
    /**
     * A short description of the rule used to detect the alert.
     *
     * @param string $ruleDescription
     *
     * @return self
     */
    public function setRuleDescription(string $ruleDescription) : self
    {
        $this->initialized['ruleDescription'] = true;
        $this->ruleDescription = $ruleDescription;
        return $this;
    }
    /**
     * The name of the tool used to detect the alert.
     *
     * @return string|null
     */
    public function getTool() : ?string
    {
        return $this->tool;
    }
    /**
     * The name of the tool used to detect the alert.
     *
     * @param string|null $tool
     *
     * @return self
     */
    public function setTool(?string $tool) : self
    {
        $this->initialized['tool'] = true;
        $this->tool = $tool;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Whether or not the alert is open.
     *
     * @return bool
     */
    public function getOpen() : bool
    {
        return $this->open;
    }
    /**
     * Whether or not the alert is open.
     *
     * @param bool $open
     *
     * @return self
     */
    public function setOpen(bool $open) : self
    {
        $this->initialized['open'] = true;
        $this->open = $open;
        return $this;
    }
    /**
     * 
     *
     * @return CodeScanningAlertClosedBy|null
     */
    public function getClosedBy() : ?CodeScanningAlertClosedBy
    {
        return $this->closedBy;
    }
    /**
     * 
     *
     * @param CodeScanningAlertClosedBy|null $closedBy
     *
     * @return self
     */
    public function setClosedBy(?CodeScanningAlertClosedBy $closedBy) : self
    {
        $this->initialized['closedBy'] = true;
        $this->closedBy = $closedBy;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getClosedAt() : ?\DateTime
    {
        return $this->closedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $closedAt
     *
     * @return self
     */
    public function setClosedAt(?\DateTime $closedAt) : self
    {
        $this->initialized['closedAt'] = true;
        $this->closedAt = $closedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }
    /**
     * 
     *
     * @param string $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(string $htmlUrl) : self
    {
        $this->initialized['htmlUrl'] = true;
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getClosedReason() : ?string
    {
        return $this->closedReason;
    }
    /**
     * 
     *
     * @param string|null $closedReason
     *
     * @return self
     */
    public function setClosedReason(?string $closedReason) : self
    {
        $this->initialized['closedReason'] = true;
        $this->closedReason = $closedReason;
        return $this;
    }
}