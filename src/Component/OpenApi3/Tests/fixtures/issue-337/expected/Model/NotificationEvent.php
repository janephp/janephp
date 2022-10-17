<?php

namespace CreditSafe\API\Model;

class NotificationEvent extends \ArrayObject
{
    /**
     * 
     *
     * @var Company
     */
    protected $company;
    /**
     * The unique identifier of the event that triggered the generation of the `notificationEvent`. This identifier is consistent across all portfolios in the Global Monitoring product.
     *
     * @var float
     */
    protected $eventId;
    /**
     * The date that the event occured.
     *
     * @var \DateTime
     */
    protected $eventDate;
    /**
     * Some events contain an `oldValue` and `newValue` (e.g. a change in Credit Limit).
     *
     * @var string
     */
    protected $newValue;
    /**
     * Some events contain an `oldValue` and `newValue` (e.g. a change in Credit Limit).
     *
     * @var string
     */
    protected $oldValue;
    /**
     * The unique identifier for the `notificationEvent`. This identifier is tied to a specific `eventId` and `portfolioId`.
     *
     * @var float
     */
    protected $notificationEventId;
    /**
     * The unique identifier for the `ruleCode` that triggered the generation of the `notificationEvent`.
     *
     * @var float
     */
    protected $ruleCode;
    /**
     * The name of the notification event rule that triggered the generation of the `notificationEvent`.
     *
     * @var string
     */
    protected $ruleName;
    /**
     * 
     *
     * @return Company
     */
    public function getCompany() : Company
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param Company $company
     *
     * @return self
     */
    public function setCompany(Company $company) : self
    {
        $this->company = $company;
        return $this;
    }
    /**
     * The unique identifier of the event that triggered the generation of the `notificationEvent`. This identifier is consistent across all portfolios in the Global Monitoring product.
     *
     * @return float
     */
    public function getEventId() : float
    {
        return $this->eventId;
    }
    /**
     * The unique identifier of the event that triggered the generation of the `notificationEvent`. This identifier is consistent across all portfolios in the Global Monitoring product.
     *
     * @param float $eventId
     *
     * @return self
     */
    public function setEventId(float $eventId) : self
    {
        $this->eventId = $eventId;
        return $this;
    }
    /**
     * The date that the event occured.
     *
     * @return \DateTime
     */
    public function getEventDate() : \DateTime
    {
        return $this->eventDate;
    }
    /**
     * The date that the event occured.
     *
     * @param \DateTime $eventDate
     *
     * @return self
     */
    public function setEventDate(\DateTime $eventDate) : self
    {
        $this->eventDate = $eventDate;
        return $this;
    }
    /**
     * Some events contain an `oldValue` and `newValue` (e.g. a change in Credit Limit).
     *
     * @return string
     */
    public function getNewValue() : string
    {
        return $this->newValue;
    }
    /**
     * Some events contain an `oldValue` and `newValue` (e.g. a change in Credit Limit).
     *
     * @param string $newValue
     *
     * @return self
     */
    public function setNewValue(string $newValue) : self
    {
        $this->newValue = $newValue;
        return $this;
    }
    /**
     * Some events contain an `oldValue` and `newValue` (e.g. a change in Credit Limit).
     *
     * @return string
     */
    public function getOldValue() : string
    {
        return $this->oldValue;
    }
    /**
     * Some events contain an `oldValue` and `newValue` (e.g. a change in Credit Limit).
     *
     * @param string $oldValue
     *
     * @return self
     */
    public function setOldValue(string $oldValue) : self
    {
        $this->oldValue = $oldValue;
        return $this;
    }
    /**
     * The unique identifier for the `notificationEvent`. This identifier is tied to a specific `eventId` and `portfolioId`.
     *
     * @return float
     */
    public function getNotificationEventId() : float
    {
        return $this->notificationEventId;
    }
    /**
     * The unique identifier for the `notificationEvent`. This identifier is tied to a specific `eventId` and `portfolioId`.
     *
     * @param float $notificationEventId
     *
     * @return self
     */
    public function setNotificationEventId(float $notificationEventId) : self
    {
        $this->notificationEventId = $notificationEventId;
        return $this;
    }
    /**
     * The unique identifier for the `ruleCode` that triggered the generation of the `notificationEvent`.
     *
     * @return float
     */
    public function getRuleCode() : float
    {
        return $this->ruleCode;
    }
    /**
     * The unique identifier for the `ruleCode` that triggered the generation of the `notificationEvent`.
     *
     * @param float $ruleCode
     *
     * @return self
     */
    public function setRuleCode(float $ruleCode) : self
    {
        $this->ruleCode = $ruleCode;
        return $this;
    }
    /**
     * The name of the notification event rule that triggered the generation of the `notificationEvent`.
     *
     * @return string
     */
    public function getRuleName() : string
    {
        return $this->ruleName;
    }
    /**
     * The name of the notification event rule that triggered the generation of the `notificationEvent`.
     *
     * @param string $ruleName
     *
     * @return self
     */
    public function setRuleName(string $ruleName) : self
    {
        $this->ruleName = $ruleName;
        return $this;
    }
}