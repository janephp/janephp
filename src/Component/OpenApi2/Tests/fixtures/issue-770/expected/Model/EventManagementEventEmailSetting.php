<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class EventManagementEventEmailSetting
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Enable/Disable Email sending function
     *
     * @var bool
     */
    protected $emailEnabled;
    /**
     * E-mail recipients
     *
     * @var string
     */
    protected $mailTo;
    /**
     * Enable/Disable Email sending function
     *
     * @return bool
     */
    public function getEmailEnabled(): bool
    {
        return $this->emailEnabled;
    }
    /**
     * Enable/Disable Email sending function
     *
     * @param bool $emailEnabled
     *
     * @return self
     */
    public function setEmailEnabled(bool $emailEnabled): self
    {
        $this->initialized['emailEnabled'] = true;
        $this->emailEnabled = $emailEnabled;
        return $this;
    }
    /**
     * E-mail recipients
     *
     * @return string
     */
    public function getMailTo(): string
    {
        return $this->mailTo;
    }
    /**
     * E-mail recipients
     *
     * @param string $mailTo
     *
     * @return self
     */
    public function setMailTo(string $mailTo): self
    {
        $this->initialized['mailTo'] = true;
        $this->mailTo = $mailTo;
        return $this;
    }
}