<?php

namespace Jane\Generated\DigitalOcean\Model;

class ForwardLinks extends \ArrayObject
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
     * URI of the last page of the results.
     *
     * @var string
     */
    protected $last;
    /**
     * URI of the next page of the results.
     *
     * @var string
     */
    protected $next;
    /**
     * URI of the last page of the results.
     *
     * @return string
     */
    public function getLast(): string
    {
        return $this->last;
    }
    /**
     * URI of the last page of the results.
     *
     * @param string $last
     *
     * @return self
     */
    public function setLast(string $last): self
    {
        $this->initialized['last'] = true;
        $this->last = $last;
        return $this;
    }
    /**
     * URI of the next page of the results.
     *
     * @return string
     */
    public function getNext(): string
    {
        return $this->next;
    }
    /**
     * URI of the next page of the results.
     *
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
}