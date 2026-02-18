<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseStatusMessages extends \ArrayObject
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
     * @var list<StatusMessages>
     */
    protected $messages;
    /**
     * @return list<StatusMessages>
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
    /**
     * @param list<StatusMessages> $messages
     *
     * @return self
     */
    public function setMessages(array $messages): self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;
        return $this;
    }
}