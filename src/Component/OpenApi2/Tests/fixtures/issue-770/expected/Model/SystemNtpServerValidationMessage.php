<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemNtpServerValidationMessage
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
     * NTP Server Validation Message
     *
     * @var string
     */
    protected $message;
    /**
     * NTP Server Validation Message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * NTP Server Validation Message
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}