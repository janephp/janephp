<?php

namespace Jane\Generated\DigitalOcean\Model;

class BackwardLinks extends \ArrayObject
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
     * URI of the first page of the results.
     *
     * @var string
     */
    protected $first;
    /**
     * URI of the previous page of the results.
     *
     * @var string
     */
    protected $prev;
    /**
     * URI of the first page of the results.
     *
     * @return string
     */
    public function getFirst(): string
    {
        return $this->first;
    }
    /**
     * URI of the first page of the results.
     *
     * @param string $first
     *
     * @return self
     */
    public function setFirst(string $first): self
    {
        $this->initialized['first'] = true;
        $this->first = $first;
        return $this;
    }
    /**
     * URI of the previous page of the results.
     *
     * @return string
     */
    public function getPrev(): string
    {
        return $this->prev;
    }
    /**
     * URI of the previous page of the results.
     *
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
}