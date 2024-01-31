<?php

namespace ApiPlatform\Demo\Model;

class BooksGetHaljsonResponse200Links extends \ArrayObject
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
     * 
     *
     * @var BooksGetHaljsonResponse200LinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @var BooksGetHaljsonResponse200LinksFirst
     */
    protected $first;
    /**
     * 
     *
     * @var BooksGetHaljsonResponse200LinksLast
     */
    protected $last;
    /**
     * 
     *
     * @var BooksGetHaljsonResponse200LinksNext
     */
    protected $next;
    /**
     * 
     *
     * @var BooksGetHaljsonResponse200LinksPrevious
     */
    protected $previous;
    /**
     * 
     *
     * @return BooksGetHaljsonResponse200LinksSelf
     */
    public function getSelf() : BooksGetHaljsonResponse200LinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param BooksGetHaljsonResponse200LinksSelf $self
     *
     * @return self
     */
    public function setSelf(BooksGetHaljsonResponse200LinksSelf $self) : self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return BooksGetHaljsonResponse200LinksFirst
     */
    public function getFirst() : BooksGetHaljsonResponse200LinksFirst
    {
        return $this->first;
    }
    /**
     * 
     *
     * @param BooksGetHaljsonResponse200LinksFirst $first
     *
     * @return self
     */
    public function setFirst(BooksGetHaljsonResponse200LinksFirst $first) : self
    {
        $this->initialized['first'] = true;
        $this->first = $first;
        return $this;
    }
    /**
     * 
     *
     * @return BooksGetHaljsonResponse200LinksLast
     */
    public function getLast() : BooksGetHaljsonResponse200LinksLast
    {
        return $this->last;
    }
    /**
     * 
     *
     * @param BooksGetHaljsonResponse200LinksLast $last
     *
     * @return self
     */
    public function setLast(BooksGetHaljsonResponse200LinksLast $last) : self
    {
        $this->initialized['last'] = true;
        $this->last = $last;
        return $this;
    }
    /**
     * 
     *
     * @return BooksGetHaljsonResponse200LinksNext
     */
    public function getNext() : BooksGetHaljsonResponse200LinksNext
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param BooksGetHaljsonResponse200LinksNext $next
     *
     * @return self
     */
    public function setNext(BooksGetHaljsonResponse200LinksNext $next) : self
    {
        $this->initialized['next'] = true;
        $this->next = $next;
        return $this;
    }
    /**
     * 
     *
     * @return BooksGetHaljsonResponse200LinksPrevious
     */
    public function getPrevious() : BooksGetHaljsonResponse200LinksPrevious
    {
        return $this->previous;
    }
    /**
     * 
     *
     * @param BooksGetHaljsonResponse200LinksPrevious $previous
     *
     * @return self
     */
    public function setPrevious(BooksGetHaljsonResponse200LinksPrevious $previous) : self
    {
        $this->initialized['previous'] = true;
        $this->previous = $previous;
        return $this;
    }
}