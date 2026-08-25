<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class StationsGetXmlResponse200Links implements AdditionalPropertiesInterface
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
    protected $self;
    /**
     * @var string
     */
    protected $next;
    /**
     * @var string
     */
    protected $prev;
    /**
     * @return string
     */
    public function getSelf(): string
    {
        return $this->self;
    }
    /**
     * @param string $self
     *
     * @return self
     */
    public function setSelf(string $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
    /**
     * @return string
     */
    public function getNext(): string
    {
        return $this->next;
    }
    /**
     * @param string $next
     *
     * @return self
     */
    public function setNext(string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;
        return $this;
    }
    /**
     * @return string
     */
    public function getPrev(): string
    {
        return $this->prev;
    }
    /**
     * @param string $prev
     *
     * @return self
     */
    public function setPrev(string $prev): self
    {
        $this->initialized['prev'] = true;
        $this->prev = $prev;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['self' => ['self', 'getSelf', 'setSelf'], 'next' => ['next', 'getNext', 'setNext'], 'prev' => ['prev', 'getPrev', 'setPrev']];
    }
}