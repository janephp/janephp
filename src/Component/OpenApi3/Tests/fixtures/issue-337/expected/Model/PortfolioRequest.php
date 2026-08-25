<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class PortfolioRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $isDefault;
    /**
     * @var PortfolioRequestEmails
     */
    protected $emails;
    /**
     * @var string
     */
    protected $emailSubject;
    /**
     * @var string
     */
    protected $emailLanguage;
    /**
     * @var string
     */
    protected $frequency;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }
    /**
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault): self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * @return PortfolioRequestEmails
     */
    public function getEmails(): PortfolioRequestEmails
    {
        return $this->emails;
    }
    /**
     * @param PortfolioRequestEmails $emails
     *
     * @return self
     */
    public function setEmails(PortfolioRequestEmails $emails): self
    {
        $this->initialized['emails'] = true;
        $this->emails = $emails;
        return $this;
    }
    /**
     * @return string
     */
    public function getEmailSubject(): string
    {
        return $this->emailSubject;
    }
    /**
     * @param string $emailSubject
     *
     * @return self
     */
    public function setEmailSubject(string $emailSubject): self
    {
        $this->initialized['emailSubject'] = true;
        $this->emailSubject = $emailSubject;
        return $this;
    }
    /**
     * @return string
     */
    public function getEmailLanguage(): string
    {
        return $this->emailLanguage;
    }
    /**
     * @param string $emailLanguage
     *
     * @return self
     */
    public function setEmailLanguage(string $emailLanguage): self
    {
        $this->initialized['emailLanguage'] = true;
        $this->emailLanguage = $emailLanguage;
        return $this;
    }
    /**
     * @return string
     */
    public function getFrequency(): string
    {
        return $this->frequency;
    }
    /**
     * @param string $frequency
     *
     * @return self
     */
    public function setFrequency(string $frequency): self
    {
        $this->initialized['frequency'] = true;
        $this->frequency = $frequency;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'isDefault' => ['isDefault', 'getIsDefault', 'setIsDefault'], 'emails' => ['emails', 'getEmails', 'setEmails'], 'emailSubject' => ['emailSubject', 'getEmailSubject', 'setEmailSubject'], 'emailLanguage' => ['emailLanguage', 'getEmailLanguage', 'setEmailLanguage'], 'frequency' => ['frequency', 'getFrequency', 'setFrequency']];
    }
}