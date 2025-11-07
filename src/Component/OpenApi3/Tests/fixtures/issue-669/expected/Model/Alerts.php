<?php

namespace Jane\Generated\DigitalOcean\Model;

class Alerts extends \ArrayObject
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
     * An email to notify on an alert trigger.
     *
     * @var list<string>
     */
    protected $email;
    /**
     * Slack integration details.
     *
     * @var list<SlackDetails>
     */
    protected $slack;
    /**
     * An email to notify on an alert trigger.
     *
     * @return list<string>
     */
    public function getEmail(): array
    {
        return $this->email;
    }
    /**
     * An email to notify on an alert trigger.
     *
     * @param list<string> $email
     *
     * @return self
     */
    public function setEmail(array $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * Slack integration details.
     *
     * @return list<SlackDetails>
     */
    public function getSlack(): array
    {
        return $this->slack;
    }
    /**
     * Slack integration details.
     *
     * @param list<SlackDetails> $slack
     *
     * @return self
     */
    public function setSlack(array $slack): self
    {
        $this->initialized['slack'] = true;
        $this->slack = $slack;
        return $this;
    }
}