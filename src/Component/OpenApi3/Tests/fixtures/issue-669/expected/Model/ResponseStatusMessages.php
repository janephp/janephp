<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseStatusMessages implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['messages' => ['messages', 'getMessages', 'setMessages']];
    }
}