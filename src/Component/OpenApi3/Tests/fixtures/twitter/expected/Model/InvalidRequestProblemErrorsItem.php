<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class InvalidRequestProblemErrorsItem implements AdditionalPropertiesInterface
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
     * @var array<string, list<string>>
     */
    protected $parameters;
    /**
     * @var string
     */
    protected $message;
    /**
     * @return array<string, list<string>>
     */
    public function getParameters(): iterable
    {
        return $this->parameters;
    }
    /**
     * @param array<string, list<string>> $parameters
     *
     * @return self
     */
    public function setParameters(iterable $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
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
        return ['parameters' => ['parameters', 'getParameters', 'setParameters'], 'message' => ['message', 'getMessage', 'setMessage']];
    }
}