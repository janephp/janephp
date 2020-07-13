<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdPatchBody
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
     * @var MonitoringPortfoliosPortfolioIdPatchBodyEmailsItem[]
     */
    protected $emails;
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
    protected $emailSubject;
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
     * @return MonitoringPortfoliosPortfolioIdPatchBodyEmailsItem[]
     */
    public function getEmails() : array
    {
        return $this->emails;
    }
    /**
     * 
     *
     * @param MonitoringPortfoliosPortfolioIdPatchBodyEmailsItem[] $emails
     *
     * @return self
     */
    public function setEmails(array $emails) : self
    {
        $this->emails = $emails;
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
}