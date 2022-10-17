<?php

namespace CreditSafe\API\Model;

class Event extends \ArrayObject
{
    /**
     * The unique identifier for the event.
     *
     * @var float
     */
    protected $eventId;
    /**
     * The Safe Number (Creditsafe's identifier on all Companies owned in the Creditsafe Universe) of the company that triggered the event.
     *
     * @var float
     */
    protected $companyId;
    /**
     * The portfolio Id of the portfolio that contains the company that you requested event information for.
     *
     * @var float
     */
    protected $portfolioId;
    /**
     * A short description of the company event.
     *
     * @var string
     */
    protected $ruleName;
    /**
     * The local event code for the event.
     *
     * @var string
     */
    protected $localEventCode;
    /**
     * The global event code that has been mapped to the local event.
     *
     * @var string
     */
    protected $globalEventCode;
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
     * The date that the event occured.
     *
     * @var \DateTime
     */
    protected $eventDate;
    /**
     * The date that the event was created in the Creditsafe database.
     *
     * @var \DateTime
     */
    protected $createdDate;
    /**
     * The unique identifier for the event.
     *
     * @return float
     */
    public function getEventId() : float
    {
        return $this->eventId;
    }
    /**
     * The unique identifier for the event.
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
     * The Safe Number (Creditsafe's identifier on all Companies owned in the Creditsafe Universe) of the company that triggered the event.
     *
     * @return float
     */
    public function getCompanyId() : float
    {
        return $this->companyId;
    }
    /**
     * The Safe Number (Creditsafe's identifier on all Companies owned in the Creditsafe Universe) of the company that triggered the event.
     *
     * @param float $companyId
     *
     * @return self
     */
    public function setCompanyId(float $companyId) : self
    {
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * The portfolio Id of the portfolio that contains the company that you requested event information for.
     *
     * @return float
     */
    public function getPortfolioId() : float
    {
        return $this->portfolioId;
    }
    /**
     * The portfolio Id of the portfolio that contains the company that you requested event information for.
     *
     * @param float $portfolioId
     *
     * @return self
     */
    public function setPortfolioId(float $portfolioId) : self
    {
        $this->portfolioId = $portfolioId;
        return $this;
    }
    /**
     * A short description of the company event.
     *
     * @return string
     */
    public function getRuleName() : string
    {
        return $this->ruleName;
    }
    /**
     * A short description of the company event.
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
    /**
     * The local event code for the event.
     *
     * @return string
     */
    public function getLocalEventCode() : string
    {
        return $this->localEventCode;
    }
    /**
     * The local event code for the event.
     *
     * @param string $localEventCode
     *
     * @return self
     */
    public function setLocalEventCode(string $localEventCode) : self
    {
        $this->localEventCode = $localEventCode;
        return $this;
    }
    /**
     * The global event code that has been mapped to the local event.
     *
     * @return string
     */
    public function getGlobalEventCode() : string
    {
        return $this->globalEventCode;
    }
    /**
     * The global event code that has been mapped to the local event.
     *
     * @param string $globalEventCode
     *
     * @return self
     */
    public function setGlobalEventCode(string $globalEventCode) : self
    {
        $this->globalEventCode = $globalEventCode;
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
     * The date that the event was created in the Creditsafe database.
     *
     * @return \DateTime
     */
    public function getCreatedDate() : \DateTime
    {
        return $this->createdDate;
    }
    /**
     * The date that the event was created in the Creditsafe database.
     *
     * @param \DateTime $createdDate
     *
     * @return self
     */
    public function setCreatedDate(\DateTime $createdDate) : self
    {
        $this->createdDate = $createdDate;
        return $this;
    }
}