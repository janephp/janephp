<?php

namespace CreditSafe\API\Model;

class Paging extends \ArrayObject
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
     * The maximum number of results returned per page.
     *
     * @var float
     */
    protected $size;
    /**
     * The page number of the previous page, null if there is no previous page available.
     *
     * @var float
     */
    protected $prev;
    /**
     * The page number of the next page, null if there is no next page available.
     *
     * @var float
     */
    protected $next;
    /**
     * The page number of the last page.
     *
     * @var float
     */
    protected $last;
    /**
     * The maximum number of results returned per page.
     *
     * @return float
     */
    public function getSize() : float
    {
        return $this->size;
    }
    /**
     * The maximum number of results returned per page.
     *
     * @param float $size
     *
     * @return self
     */
    public function setSize(float $size) : self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * The page number of the previous page, null if there is no previous page available.
     *
     * @return float
     */
    public function getPrev() : float
    {
        return $this->prev;
    }
    /**
     * The page number of the previous page, null if there is no previous page available.
     *
     * @param float $prev
     *
     * @return self
     */
    public function setPrev(float $prev) : self
    {
        $this->initialized['prev'] = true;
        $this->prev = $prev;
        return $this;
    }
    /**
     * The page number of the next page, null if there is no next page available.
     *
     * @return float
     */
    public function getNext() : float
    {
        return $this->next;
    }
    /**
     * The page number of the next page, null if there is no next page available.
     *
     * @param float $next
     *
     * @return self
     */
    public function setNext(float $next) : self
    {
        $this->initialized['next'] = true;
        $this->next = $next;
        return $this;
    }
    /**
     * The page number of the last page.
     *
     * @return float
     */
    public function getLast() : float
    {
        return $this->last;
    }
    /**
     * The page number of the last page.
     *
     * @param float $last
     *
     * @return self
     */
    public function setLast(float $last) : self
    {
        $this->initialized['last'] = true;
        $this->last = $last;
        return $this;
    }
}