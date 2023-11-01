<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class PaginationLinks
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * First page
     *
     * @var string
     */
    protected $first;
    /**
     * Last page
     *
     * @var string
     */
    protected $last;
    /**
     * Previous page
     *
     * @var string
     */
    protected $previous;
    /**
     * Next page
     *
     * @var string
     */
    protected $next;
    /**
     * First page
     *
     * @return string
     */
    public function getFirst() : string
    {
        return $this->first;
    }
    /**
     * First page
     *
     * @param string $first
     *
     * @return self
     */
    public function setFirst(string $first) : self
    {
        $this->initialized['first'] = true;
        $this->first = $first;
        return $this;
    }
    /**
     * Last page
     *
     * @return string
     */
    public function getLast() : string
    {
        return $this->last;
    }
    /**
     * Last page
     *
     * @param string $last
     *
     * @return self
     */
    public function setLast(string $last) : self
    {
        $this->initialized['last'] = true;
        $this->last = $last;
        return $this;
    }
    /**
     * Previous page
     *
     * @return string
     */
    public function getPrevious() : string
    {
        return $this->previous;
    }
    /**
     * Previous page
     *
     * @param string $previous
     *
     * @return self
     */
    public function setPrevious(string $previous) : self
    {
        $this->initialized['previous'] = true;
        $this->previous = $previous;
        return $this;
    }
    /**
     * Next page
     *
     * @return string
     */
    public function getNext() : string
    {
        return $this->next;
    }
    /**
     * Next page
     *
     * @param string $next
     *
     * @return self
     */
    public function setNext(string $next) : self
    {
        $this->initialized['next'] = true;
        $this->next = $next;
        return $this;
    }
}