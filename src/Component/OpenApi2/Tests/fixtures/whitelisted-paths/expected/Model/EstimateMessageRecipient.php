<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class EstimateMessageRecipient
{
    /**
     * Name of the message recipient.
     *
     * @var string
     */
    protected $name;
    /**
     * Email of the message recipient.
     *
     * @var string
     */
    protected $email;
    /**
     * Name of the message recipient.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the message recipient.
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
     * Email of the message recipient.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * Email of the message recipient.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
}