<?php

namespace CreditSafe\API\Model;

class PortfolioRequest
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var bool
     */
    protected $isDefault;
    /**
     * 
     *
     * @var PortfolioRequestEmails
     */
    protected $emails;
    /**
     * 
     *
     * @var string
     */
    protected $emailSubject;
    /**
     * 
     *
     * @var string
     */
    protected $emailLanguage;
    /**
     * 
     *
     * @var string
     */
    protected $frequency;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsDefault() : bool
    {
        return $this->isDefault;
    }
    /**
     * 
     *
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault) : self
    {
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * 
     *
     * @return PortfolioRequestEmails
     */
    public function getEmails() : PortfolioRequestEmails
    {
        return $this->emails;
    }
    /**
     * 
     *
     * @param PortfolioRequestEmails $emails
     *
     * @return self
     */
    public function setEmails(PortfolioRequestEmails $emails) : self
    {
        $this->emails = $emails;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmailSubject() : string
    {
        return $this->emailSubject;
    }
    /**
     * 
     *
     * @param string $emailSubject
     *
     * @return self
     */
    public function setEmailSubject(string $emailSubject) : self
    {
        $this->emailSubject = $emailSubject;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmailLanguage() : string
    {
        return $this->emailLanguage;
    }
    /**
     * 
     *
     * @param string $emailLanguage
     *
     * @return self
     */
    public function setEmailLanguage(string $emailLanguage) : self
    {
        $this->emailLanguage = $emailLanguage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFrequency() : string
    {
        return $this->frequency;
    }
    /**
     * 
     *
     * @param string $frequency
     *
     * @return self
     */
    public function setFrequency(string $frequency) : self
    {
        $this->frequency = $frequency;
        return $this;
    }
}