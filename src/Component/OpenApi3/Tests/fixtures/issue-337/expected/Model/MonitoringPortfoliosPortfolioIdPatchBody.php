<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdPatchBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['name'] = true;
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
        $this->initialized['emails'] = true;
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
        $this->initialized['emailLanguage'] = true;
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
        $this->initialized['emailSubject'] = true;
        $this->emailSubject = $emailSubject;
        return $this;
    }
}