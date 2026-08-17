<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class Message
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
     * @var string
     */
    protected $subject;
    /**
     * @var string|null
     */
    protected $body;
    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }
    /**
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }
    /**
     * @param string|null $body
     *
     * @return self
     */
    public function setBody(?string $body): self
    {
        $this->initialized['body'] = true;
        $this->body = $body;
        return $this;
    }
}