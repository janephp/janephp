<?php

namespace Jane\Component\OpenApi31\Tests\StatusCodeRange\Model;

use Jane\Component\OpenApi31\Tests\StatusCodeRange\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\StatusCodeRange\Runtime\AdditionalPropertiesInterface;
class Message implements AdditionalPropertiesInterface
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
    protected $message;
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
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
    public function definedProperties(): array
    {
        return ['message' => ['message', 'getMessage', 'setMessage']];
    }
}